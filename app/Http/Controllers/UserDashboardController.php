<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Services\SubscriptionService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserDashboardController extends Controller
{
    public function index(Request $request)
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

        return Inertia::render('Dashboard', [
            'activeSubscriptions' => $activeSubscriptions,
            'monthlySpend' => round($monthlySpend, 2),
            'subscriptionHistory' => $subscriptionHistory,
        ]);
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
