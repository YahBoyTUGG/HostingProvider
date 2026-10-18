<?php

use App\Models\Contact;
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

it('allows admins to delete a virtual machine and cancel its subscription', function () {
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
        ->delete(route('admin.virtual-machines.destroy', $virtualMachine))
        ->assertRedirect();

    expect(VirtualMachine::find($virtualMachine->id))->toBeNull()
        ->and($subscription->refresh()->status)->toBe('cancelled');
});

it('prevents an admin from demoting their own account with a message', function () {
    $admin = User::factory()->create(['role' => 'admin']);

    $this->actingAs($admin)
        ->post(route('admin.users.demote', $admin))
        ->assertRedirect()
        ->assertSessionHas('error', 'You cannot demote your own account.');

    expect($admin->refresh()->role)->toBe('admin');
});

it('allows admins to delete contacts', function () {
    $admin = User::factory()->create(['role' => 'admin']);
    $contact = Contact::create([
        'name' => 'Test Contact',
        'email' => 'contact@example.com',
        'subject' => 'Test inquiry',
        'message' => 'Please contact me.',
        'is_read' => false,
    ]);

    $this->actingAs($admin)
        ->delete(route('admin.contacts.destroy', $contact))
        ->assertRedirect();

    expect(Contact::find($contact->id))->toBeNull();
});

it('prevents regular users from deleting contacts', function () {
    $user = User::factory()->create(['role' => 'user']);
    $contact = Contact::create([
        'name' => 'Test Contact',
        'email' => 'contact@example.com',
        'subject' => 'Test inquiry',
        'message' => 'Please contact me.',
        'is_read' => false,
    ]);

    $this->actingAs($user)
        ->delete(route('admin.contacts.destroy', $contact))
        ->assertForbidden();

    expect(Contact::find($contact->id))->not->toBeNull();
});
