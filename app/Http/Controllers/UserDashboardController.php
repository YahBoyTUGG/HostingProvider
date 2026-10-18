<?php

namespace App\Http\Controllers;

use App\Models\Dockerfile;
use App\Models\Subscription;
use App\Models\UserContainer;
use App\Services\DockerContainerService;
use App\Services\SubscriptionService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Inertia\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;

class UserDashboardController extends Controller
{
    public function index(Request $request, DockerContainerService $service): Response
    {
        $user = $request->user();

        $activeSubscriptions = Subscription::with(['virtualMachine.operatingSystem', 'virtualMachine.preinstalledApps', 'serverOffer'])
            ->where('user_id', $user->id)
            ->where('status', 'active')
            ->get();

        $runningServerCount = $activeSubscriptions->filter(
            fn (Subscription $subscription) => $subscription->virtualMachine?->isRunning() ?? false,
        )->count();
        $activeInstanceCount = $activeSubscriptions->filter(
            fn (Subscription $subscription) => $subscription->virtualMachine !== null
                && $subscription->virtualMachine->status !== 'provisioning',
        )->count();

        // Total spending breakdown
        $monthlySpend = $activeSubscriptions->sum(fn ($sub) => $sub->monthly_equivalent_cost);

        $subscriptionHistory = Subscription::with('serverOffer')
            ->where('user_id', $user->id)
            ->latest()
            ->get();

        $dockerfiles = Dockerfile::with('userContainers')
            ->where('user_id', $user->id)
            ->latest()
            ->get();

        foreach ($dockerfiles as $dockerfile) {
            try {
                $service->syncStatuses($dockerfile);
            } catch (\Throwable $exception) {
                report($exception);
            }
        }

        $dockerfiles->load('userContainers');

        return Inertia::render('Dashboard', [
            'activeSubscriptions' => $activeSubscriptions,
            'runningServerCount' => $runningServerCount,
            'activeInstanceCount' => $activeInstanceCount,
            'monthlySpend' => round($monthlySpend, 2),
            'subscriptionHistory' => $subscriptionHistory,
            'dockerfiles' => $dockerfiles,
        ]);
    }

    public function storeDockerfile(Request $request, DockerContainerService $service): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'archive' => ['required', 'file', 'mimes:zip', 'max:102400'],
            'memory_limit_mb' => ['required', 'integer', 'min:64', 'max:32768'],
            'cpu_limit_cores' => ['required', 'numeric', 'min:0.1', 'max:64'],
            'container_port' => ['required', 'integer', 'min:1', 'max:65535'],
        ]);

        try {
            $dockerfile = $service->deploy(
                $request->user(),
                $request->file('archive'),
                $validated['name'],
                $validated['memory_limit_mb'],
                (float) $validated['cpu_limit_cores'],
                $validated['container_port'],
            );
        } catch (\Throwable $exception) {
            report($exception);

            return back()->withErrors([
                'archive' => $exception->getMessage(),
            ]);
        }

        Inertia::flash('toast', [
            'type' => $dockerfile->build_status === 'ready' ? 'success' : 'error',
            'message' => $dockerfile->build_status === 'ready'
                ? 'Docker image built and container started.'
                : 'Docker image build failed. See the build log for details.',
        ]);

        return back();
    }

    public function downloadDockerfile(Dockerfile $dockerfile): StreamedResponse
    {
        abort_unless($dockerfile->user_id === auth()->id(), 403);

        return Storage::disk('local')->download(
            $dockerfile->file_path,
            basename($dockerfile->file_path),
        );
    }

    public function destroyDockerfile(Dockerfile $dockerfile, DockerContainerService $service): RedirectResponse
    {
        abort_unless($dockerfile->user_id === auth()->id(), 403);

        $service->remove($dockerfile->load('userContainers'));

        Inertia::flash('toast', [
            'type' => 'success',
            'message' => 'Docker container and source archive removed.',
        ]);

        return back();
    }

    public function pauseDockerContainer(UserContainer $userContainer, DockerContainerService $service): RedirectResponse
    {
        abort_unless($userContainer->user_id === auth()->id(), 403);

        try {
            $service->pause($userContainer);
        } catch (\Throwable $exception) {
            report($exception);

            return back()->withErrors(['docker' => $exception->getMessage()]);
        }

        Inertia::flash('toast', [
            'type' => 'success',
            'message' => 'Docker container paused.',
        ]);

        return back();
    }

    public function unpauseDockerContainer(UserContainer $userContainer, DockerContainerService $service): RedirectResponse
    {
        abort_unless($userContainer->user_id === auth()->id(), 403);

        try {
            $service->unpause($userContainer);
        } catch (\Throwable $exception) {
            report($exception);

            return back()->withErrors(['docker' => $exception->getMessage()]);
        }

        Inertia::flash('toast', [
            'type' => 'success',
            'message' => 'Docker container resumed.',
        ]);

        return back();
    }

    public function toggle_power(Subscription $subscription): RedirectResponse
    {
        $this->authorize_owner($subscription);

        $vm = $subscription->virtualMachine;
        abort_unless($vm !== null, 404);

        if ($vm->status === 'provisioning') {
            return back()->withErrors([
                'power' => 'Power controls are unavailable while the server is provisioning.',
            ]);
        }

        $vm->update([
            'status' => $vm->status === 'running' ? 'stopped' : 'running',
        ]);

        Inertia::flash('toast', [
            'type' => 'success',
            'message' => $vm->status === 'running'
                ? 'Server instance started.'
                : 'Server instance stopped.',
        ]);

        return back();
    }

    public function cancel(Subscription $subscription, SubscriptionService $service): RedirectResponse
    {
        $this->authorize_owner($subscription);

        $service->cancel_subscription($subscription);

        Inertia::flash('toast', [
            'type' => 'success',
            'message' => 'Plan cancelled.',
        ]);

        return back();
    }

    private function authorize_owner(Subscription $subscription): void
    {
        if ($subscription->user_id !== auth()->id()) {
            abort(403);
        }
    }
}
