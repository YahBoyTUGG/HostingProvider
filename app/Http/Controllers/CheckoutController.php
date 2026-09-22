<?php

namespace App\Http\Controllers;

use App\Models\AvailableApp;
use App\Models\OperatingSystem;
use App\Models\ServerOffer;
use App\Services\SubscriptionService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Inertia\Inertia;

class CheckoutController extends Controller
{
    public function show(ServerOffer $offer)
    {
        $this->ensureStarterVps($offer);

        return Inertia::render('Checkout/Show', [
            'offer' => $offer,
            'operatingSystems' => OperatingSystem::where('is_active', true)
                ->whereIn('type', [$offer->type, 'both'])
                ->get(),
            'availableApps' => AvailableApp::where('is_active', true)->get(),
        ]);
    }

    public function store(Request $request, ServerOffer $offer, SubscriptionService $service)
    {
        $this->ensureStarterVps($offer);

        // Sanitize card input formatting before validation
        $request->merge([
            'card_number' => preg_replace('/\D/', '', $request->input('card_number', '')),
            'card_expiry' => preg_replace('/\D/', '', $request->input('card_expiry', '')),
        ]);

        $availableBillingCycles = collect([
            'monthly' => $offer->price_monthly,
            '6_months' => $offer->price_6_months,
            '1_year' => $offer->price_1_year,
            '2_years' => $offer->price_2_years,
        ])->filter(fn ($price) => $price !== null)->keys()->all();

        $validated = $request->validate([
            'operating_system_id' => [
                'required',
                Rule::exists('operating_systems', 'id')
                    ->where('is_active', true)
                    ->whereIn('type', [$offer->type, 'both']),
            ],
            'billing_cycle' => ['required', Rule::in($availableBillingCycles)],
            'machine_name' => 'required|string|max:255',
            'apps' => 'nullable|array',
            'apps.*' => 'exists:available_apps,id,is_active,1',
            'cardholder_name' => 'required|string|max:120',
            'card_number' => 'required|numeric|digits_between:13,19',
            'card_expiry' => 'required|digits:4',
            'card_cvc' => 'required|digits_between:3,4',
        ]);

        $service->create_subscription(
            $request->user(),
            $offer,
            (int) $validated['operating_system_id'], // Explicitly cast string to int
            $validated['billing_cycle'],
            $validated['machine_name'],
            $validated['apps'] ?? []
        );

        return redirect()->route('dashboard')->with('success', 'Server provisioned successfully!');
    }

    private function ensureStarterVps(ServerOffer $offer): void
    {
        abort_unless($offer->name === 'Starter VPS' && $offer->type === 'vps', 404);
    }
}
