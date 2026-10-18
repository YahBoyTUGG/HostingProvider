<?php

use App\Models\OperatingSystem;
use App\Models\ServerOffer;
use App\Models\Subscription;
use App\Models\User;
use App\Models\VirtualMachine;
use Inertia\Testing\AssertableInertia as Assert;

test('guests are redirected to the login page', function () {
    $response = $this->get(route('dashboard'));
    $response->assertRedirect(route('login'));
});

test('authenticated users can visit the dashboard', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $response = $this->get(route('dashboard'));
    $response->assertOk();
});

test('dashboard reports only active virtual machines that are running', function () {
    $user = User::factory()->create();
    $offer = ServerOffer::create([
        'name' => 'Test VPS',
        'type' => 'vps',
        'ram_gb' => 4,
        'cpu_cores' => 2,
        'storage_amount_gb' => 40,
        'storage_type' => 'NVMe SSD',
        'bandwidth_tb' => 2,
        'price_monthly' => 10,
        'price_1_year' => 100,
        'country' => 'Germany',
        'city' => 'Frankfurt',
    ]);
    $operatingSystem = OperatingSystem::create([
        'name' => 'Ubuntu',
        'version' => '24.04 LTS',
        'type' => 'vps',
    ]);

    foreach (['running', 'stopped', 'provisioning'] as $status) {
        $subscription = Subscription::create([
            'user_id' => $user->id,
            'server_offer_id' => $offer->id,
            'billing_cycle' => 'monthly',
            'cost' => 10,
            'status' => 'active',
            'starts_at' => now(),
            'ends_at' => now()->addMonth(),
        ]);

        VirtualMachine::create([
            'subscription_id' => $subscription->id,
            'operating_system_id' => $operatingSystem->id,
            'name' => "test-vm-{$status}",
            'ip_address' => '192.0.2.1',
            'ssh_password_hash' => 'not-a-real-password-hash',
            'status' => $status,
        ]);
    }

    $this->actingAs($user)
        ->get(route('dashboard'))
        ->assertInertia(fn (Assert $page) => $page
            ->component('Dashboard')
            ->where('runningServerCount', 1)
            ->where('activeInstanceCount', 2),
        );
});

test('users cannot toggle power while their virtual machine is provisioning', function () {
    $user = User::factory()->create();
    $offer = ServerOffer::create([
        'name' => 'Test VPS',
        'type' => 'vps',
        'ram_gb' => 4,
        'cpu_cores' => 2,
        'storage_amount_gb' => 40,
        'storage_type' => 'NVMe SSD',
        'bandwidth_tb' => 2,
        'price_monthly' => 10,
        'price_1_year' => 100,
        'country' => 'Germany',
        'city' => 'Frankfurt',
    ]);
    $operatingSystem = OperatingSystem::create([
        'name' => 'Ubuntu',
        'version' => '24.04 LTS',
        'type' => 'vps',
    ]);
    $subscription = Subscription::create([
        'user_id' => $user->id,
        'server_offer_id' => $offer->id,
        'billing_cycle' => 'monthly',
        'cost' => 10,
        'status' => 'active',
        'starts_at' => now(),
        'ends_at' => now()->addMonth(),
    ]);
    $virtualMachine = VirtualMachine::create([
        'subscription_id' => $subscription->id,
        'operating_system_id' => $operatingSystem->id,
        'name' => 'test-vm',
        'ip_address' => '192.0.2.1',
        'ssh_password_hash' => 'not-a-real-password-hash',
        'status' => 'provisioning',
    ]);

    $this->actingAs($user)
        ->post(route('subscriptions.toggle-power', $subscription))
        ->assertSessionHasErrors('power');

    expect($virtualMachine->fresh()->status)->toBe('provisioning');
});
