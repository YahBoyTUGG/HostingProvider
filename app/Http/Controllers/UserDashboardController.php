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
use Symfony\Component\HttpFoundation\StreamedResponse;

class UserDashboardController extends Controller
{
    public function index(Request $request, DockerContainerService $service)
    {
        $user = $request->user();

        $activeSubscriptions = Subscription::with(['virtualMachine.operatingSystem', 'virtualMachine.preinstalledApps', 'serverOffer'])
            ->where('user_id', $user->id)
            ->where('status', 'active')
            ->get();

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

        return back()->with('success', $dockerfile->build_status === 'ready'
            ? 'Docker image built and container started.'
            : 'Docker image build failed. See the build log for details.');
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

        return back()->with('success', 'Docker container and source archive removed.');
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

        return back()->with('success', 'Docker container paused.');
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

        return back()->with('success', 'Docker container resumed.');
    }

    public function toggle_power(Subscription $subscription)
    {
        $this->authorize_owner($subscription);

        $vm = $subscription->virtualMachine;
        $vm->update([
            'status' => $vm->status === 'running' ? 'stopped' : 'running',
        ]);

        return back();
    }

    public function cancel(Subscription $subscription, SubscriptionService $service)
    {
        $this->authorize_owner($subscription);

        $service->cancel_subscription($subscription);

        return back()->with('success', 'Subscription cancelled.');
    }

    private function authorize_owner(Subscription $subscription): void
    {
        if ($subscription->user_id !== auth()->id()) {
            abort(403);
        }
    }
}
