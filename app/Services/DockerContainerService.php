<?php

namespace App\Services;

use App\Models\Dockerfile;
use App\Models\User;
use App\Models\UserContainer;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use RuntimeException;
use ZipArchive;

class DockerContainerService
{
    public function deploy(User $user, UploadedFile $archive, string $name, int $memoryLimitMb, float $cpuLimitCores, int $containerPort): Dockerfile
    {
        $archivePath = $archive->store("docker-contexts/{$user->id}", 'local');
        $dockerfile = Dockerfile::create([
            'user_id' => $user->id,
            'name' => $name,
            'file_path' => $archivePath,
            'image_tag' => 'pending',
            'build_status' => 'pending',
        ]);
        $imageTag = "user-{$user->id}-app-{$dockerfile->id}:latest";
        $dockerfile->update(['image_tag' => $imageTag, 'build_status' => 'building']);

        $contextPath = storage_path("app/docker-builds/{$dockerfile->id}");
        File::ensureDirectoryExists($contextPath);

        try {
            $this->extractArchive(Storage::disk('local')->path($archivePath), $contextPath);
            $build = $this->runDocker(['build', '-t', $imageTag, $contextPath]);
            $log = trim($build['output']);

            if ($build['exit_code'] !== 0) {
                $dockerfile->update(['build_status' => 'failed', 'build_log' => $log]);

                return $dockerfile->fresh();
            }

            $containerName = "user-{$user->id}-dockerfile-{$dockerfile->id}";
            $hostPort = $this->findAvailableHostPort();
            $run = $this->runDocker([
                'run', '-d', '--name', $containerName,
                '--memory', "{$memoryLimitMb}m",
                '--cpus', (string) $cpuLimitCores,
                '-p', "0.0.0.0:{$hostPort}:{$containerPort}",
                $imageTag,
            ]);
            $log = trim($log."\n".$run['output']);

            if ($run['exit_code'] !== 0) {
                $dockerfile->update(['build_status' => 'failed', 'build_log' => $log]);

                return $dockerfile->fresh();
            }

            $dockerfile->update(['build_status' => 'ready', 'build_log' => $log]);
            $dockerfile->userContainers()->create([
                'user_id' => $user->id,
                'container_id' => trim($run['output']),
                'container_port' => $containerPort,
                'host_port' => $hostPort,
                'status' => 'running',
                'memory_limit_mb' => $memoryLimitMb,
                'cpu_limit_cores' => $cpuLimitCores,
            ]);

            return $dockerfile->fresh();
        } catch (\Throwable $exception) {
            $dockerfile->update([
                'build_status' => 'failed',
                'build_log' => $exception->getMessage(),
            ]);

            return $dockerfile->fresh();
        } finally {
            File::deleteDirectory($contextPath);
        }
    }

    public function syncStatuses(Dockerfile $dockerfile): void
    {
        foreach ($dockerfile->userContainers as $container) {
            if (! $container->container_id) {
                continue;
            }

            $inspect = $this->runDocker(['inspect', '--format', '{{.State.Status}}', $container->container_id]);
            $status = trim($inspect['output']);

            $container->update([
                'status' => $inspect['exit_code'] !== 0
                    ? 'error'
                    : ($status === 'running'
                        ? 'running'
                        : ($status === 'paused' ? 'paused' : 'stopped')),
                'is_paused' => $status === 'paused',
            ]);
        }
    }

    public function pause(UserContainer $container): void
    {
        $result = $this->runDocker(['pause', $container->container_id]);

        if ($result['exit_code'] !== 0) {
            throw new RuntimeException(trim($result['output']) ?: 'The Docker container could not be paused.');
        }

        $container->forceFill([
            'status' => 'paused',
            'is_paused' => true,
        ])->save();
        $container->refresh();
    }

    public function unpause(UserContainer $container): void
    {
        $result = $this->runDocker(['unpause', $container->container_id]);

        if ($result['exit_code'] !== 0) {
            throw new RuntimeException(trim($result['output']) ?: 'The Docker container could not be resumed.');
        }

        $container->forceFill([
            'status' => 'running',
            'is_paused' => false,
        ])->save();
        $container->refresh();
    }

    public function remove(Dockerfile $dockerfile): void
    {
        foreach ($dockerfile->userContainers as $container) {
            if ($container->container_id) {
                $this->runDocker(['rm', '-f', $container->container_id]);
            }
        }

        if ($dockerfile->image_tag !== 'pending') {
            $this->runDocker(['rmi', $dockerfile->image_tag]);
        }

        Storage::disk('local')->delete($dockerfile->file_path);
        $dockerfile->delete();
    }

    private function findAvailableHostPort(): int
    {
        for ($port = 10000; $port <= 65535; $port++) {
            if (UserContainer::where('host_port', $port)->exists()) {
                continue;
            }

            $socket = @stream_socket_server("tcp://0.0.0.0:{$port}", $errorCode, $errorMessage);

            if (is_resource($socket)) {
                fclose($socket);

                return $port;
            }
        }

        throw new RuntimeException('No available external port could be allocated.');
    }

    private function extractArchive(string $archivePath, string $contextPath): void
    {
        $zip = new ZipArchive;

        if ($zip->open($archivePath) !== true) {
            throw new RuntimeException('The uploaded archive could not be opened.');
        }

        try {
            for ($index = 0; $index < $zip->numFiles; $index++) {
                $entry = $zip->getNameIndex($index);
                $normalized = str_replace('\\', '/', $entry);

                if ($normalized === '' || str_starts_with($normalized, '/') || str_contains($normalized, '../') || preg_match('/^[A-Za-z]:/', $normalized)) {
                    throw new RuntimeException('The archive contains an unsafe file path.');
                }
            }

            if ($zip->locateName('Dockerfile', ZipArchive::FL_NOCASE) === false) {
                throw new RuntimeException('The archive must contain a Dockerfile at its root.');
            }

            if (! $zip->extractTo($contextPath)) {
                throw new RuntimeException('The Docker build context could not be extracted.');
            }
        } finally {
            $zip->close();
        }
    }

    private function runDocker(array $arguments): array
    {
        $outputPath = tempnam(sys_get_temp_dir(), 'docker-output-');
        $descriptors = [
            0 => ['pipe', 'r'],
            1 => ['file', $outputPath, 'w'],
            2 => ['file', $outputPath, 'a'],
        ];
        $process = proc_open(array_merge(['docker'], $arguments), $descriptors, $pipes);

        if (! is_resource($process)) {
            throw new RuntimeException('Docker is not available on this server.');
        }

        fclose($pipes[0]);
        $exitCode = proc_close($process);
        $output = file_get_contents($outputPath) ?: '';
        @unlink($outputPath);

        return ['exit_code' => $exitCode, 'output' => $output];
    }
}
