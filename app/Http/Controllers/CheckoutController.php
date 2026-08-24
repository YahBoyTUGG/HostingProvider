<?php

namespace App\Http\Controllers;

use App\Models\ServerOffer;
use App\Models\OperatingSystem;
use App\Models\AvailableApp;
use App\Services\SubscriptionService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CheckoutController extends Controller
{
    public function show(ServerOffer $offer)
    {
        return Inertia::render('Checkout/Show', [
            'offer' => $offer,
            'operatingSystems' => OperatingSystem::where('is_active', true)->get(),
            'availableApps' => AvailableApp::where('is_active', true)->get(),
        ]);
    }

    public function store(Request $request, ServerOffer $offer, SubscriptionService $service)
    {
        $validated = $request->validate([
            'operating_system_id' => 'required|exists:operating_systems,id',
            'billing_cycle' => 'required|in:monthly,6_months,1_year,2_years',
            'apps' => 'nullable|array',
            'apps.*' => 'exists:available_apps,id',
        ]);

        $service->create_subscription(
            $request->user(),
            $offer,
            $validated['operating_system_id'],
            $validated['billing_cycle'],
            $validated['apps'] ?? []
        );

        return redirect()->route('dashboard')->with('success', 'Server provisioned successfully!');
    }
}
