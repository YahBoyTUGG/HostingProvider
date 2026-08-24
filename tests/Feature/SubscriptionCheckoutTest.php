<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\ServerOffer;
use App\Models\OperatingSystem;
use App\Models\AvailableApp;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SubscriptionCheckoutTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_checkout_and_provision_vm(): void
    {
        // 1. Arrange: Create initial database records
        $user = User::factory()->create();
        $offer = ServerOffer::create([
            'name' => 'Test Cloud VPS',
            'type' => 'vps',
            'ram_gb' => 4,
            'cpu_cores' => 2,
            'storage_amount_gb' => 40,
            'storage_type' => 'NVMe SSD',
            'bandwidth_tb' => 2,
            'price_monthly' => 10.00,
            'price_1_year' => 100.00,
            'country' => 'Germany',
            'city' => 'Frankfurt',
        ]);

        $os = OperatingSystem::create([
            'name' => 'Ubuntu',
            'version' => '24.04 LTS',
            'type' => 'vps',
        ]);

        $app = AvailableApp::create([
            'name' => 'Docker',
            'slug' => 'docker',
        ]);

        // 2. Act: Execute POST request to checkout route
        $response = $this->actingAs($user)->post(route('checkout.store', $offer->id), [
            'operating_system_id' => $os->id,
            'billing_cycle' => 'monthly',
            'apps' => [$app->id],
        ]);

        // 3. Assert: Database records created successfully
        $response->assertRedirect(route('dashboard'));

        $this->assertDatabaseHas('subscriptions', [
            'user_id' => $user->id,
            'server_offer_id' => $offer->id,
            'status' => 'active',
        ]);

        $this->assertDatabaseHas('virtual_machines', [
            'operating_system_id' => $os->id,
            'status' => 'running',
        ]);
    }
}
