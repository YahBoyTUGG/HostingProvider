<?php

namespace App\Services;

use App\Models\User;
use App\Models\ServerOffer;
use App\Models\Subscription;
use App\Models\VirtualMachine;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class SubscriptionService
{
    /**
     * Handle purchasing a server offer and provisioning a simulated VM.
     */
    public function create_subscription(User $user, ServerOffer $offer, int $osId, string $cycle, array $app_ids = []): Subscription
    {
        return DB::transaction(function () use ($user, $offer, $osId, $cycle, $app_ids) {
            $durationMonths = match($cycle) {
                'monthly' => 1,
                '6_months' => 6,
                '1_year' => 12,
                '2_years' => 24,
            };

            $cost = match($cycle) {
                'monthly' => $offer->price_monthly,
                '6_months' => $offer->price_6_months ?? ($offer->price_monthly * 6),
                '1_year' => $offer->price_1_year,
                '2_years' => $offer->price_2_years ?? ($offer->price_1_year * 2),
            };

            // 1. Store Subscription record
            $subscription = Subscription::create([
                'user_id' => $user->id,
                'server_offer_id' => $offer->id,
                'billing_cycle' => $cycle,
                'cost' => $cost,
                'status' => 'active',
                'starts_at' => now(),
                'ends_at' => now()->addMonths($durationMonths),
            ]);

            // 2. Provision Virtual Machine instance
            $vm = VirtualMachine::create([
                'subscription_id' => $subscription->id,
                'operating_system_id' => $osId,
                'name' => strtolower(Str::slug($offer->name)) . '-' . Str::random(5),
                'ip_address' => rand(11, 199) . '.' . rand(0, 255) . '.' . rand(0, 255) . '.' . rand(1, 254),
                'ssh_port' => 22,
                'ssh_user' => 'root',
                'ssh_password_hash' => bcrypt(Str::random(12)),
                'status' => 'running',
            ]);

            // 3. Attach optional preinstalled software
            if (!empty($app_ids)) {
                $vm->preinstalledApps()->sync($app_ids);
            }

            return $subscription;
        });
    }

    /**
     * Cancel an active subscription and power off VM.
     */
    public function cancel_subscription(Subscription $subscription): void
    {
        DB::transaction(function () use ($subscription) {
            $subscription->update(['status' => 'cancelled']);
            if ($subscription->virtualMachine) {
                $subscription->virtualMachine->update(['status' => 'stopped']);
            }
        });
    }
}
