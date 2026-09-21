<?php

use App\Models\OperatingSystem;
use App\Models\ServerOffer;
use App\Models\Subscription;
use App\Models\User;
use App\Models\VirtualMachine;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('allows admins to update subscription and virtual machine statuses', function () {
    $admin = User::factory()->create(['role' => 'admin']);
    $user = User::factory()->create();
    $offer = ServerOffer::create([
        'name' => 'Test VPS',
        'type' => 'vps',
        'ram_gb' => 4,
        'cpu_cores' => 2,
        'storage_amount_gb' => 80,
        'storage_type' => 'NVMe SSD',
        'bandwidth_tb' => 5,
        'gpu_count' => 0,
        'price_monthly' => 25,
        'price_1_year' => 250,
        'country' => 'Slovenia',
        'city' => 'Ljubljana',
    ]);
    $subscription = Subscription::create([
        'user_id' => $user->id,
        'server_offer_id' => $offer->id,
        'billing_cycle' => 'monthly',
        'cost' => 25,
        'status' => 'active',
        'starts_at' => now(),
        'ends_at' => now()->addMonth(),
    ]);
    $operatingSystem = OperatingSystem::create([
        'name' => 'Ubuntu',
        'version' => '24.04',
        'type' => 'vps',
        'is_active' => true,
    ]);
    $virtualMachine = VirtualMachine::create([
        'subscription_id' => $subscription->id,
        'operating_system_id' => $operatingSystem->id,
        'name' => 'test-vm',
        'ip_address' => '192.0.2.10',
        'ssh_password_hash' => 'hashed-password',
        'status' => 'running',
    ]);

    $this->actingAs($admin)
        ->put(route('admin.subscriptions.status', $subscription), ['status' => 'cancelled'])
        ->assertRedirect();

    $this->actingAs($admin)
        ->put(route('admin.virtual-machines.status', $virtualMachine), ['status' => 'stopped'])
        ->assertRedirect();

    expect($subscription->refresh()->status)->toBe('cancelled')
        ->and($virtualMachine->refresh()->status)->toBe('stopped');
});
