<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Features;
use App\Models\ServerOffer;

class FeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Create Server Offers Inventory
        $starterVps = ServerOffer::create([
            'name' => 'Starter VPS',
            'type' => 'vps',
            'ram_gb' => 2,
            'cpu_cores' => 1,
            'storage_amount_gb' => 20,
            'storage_type' => 'NVMe SSD',
            'bandwidth_tb' => 1,
            'price_monthly' => 5.00,
            'price_1_year' => 50.00,
            'country' => 'Germany',
            'city' => 'Frankfurt',
        ]);

        $proVps = ServerOffer::create([
            'name' => 'Velocity Pro VPS',
            'type' => 'vps',
            'ram_gb' => 8,
            'cpu_cores' => 4,
            'storage_amount_gb' => 100,
            'storage_type' => 'NVMe SSD',
            'bandwidth_tb' => 5,
            'price_monthly' => 24.00,
            'price_1_year' => 240.00,
            'country' => 'Germany',
            'city' => 'Frankfurt',
        ]);

        $computeProVps = ServerOffer::create([
            'name' => 'Compute Pro VPS',
            'type' => 'vps',
            'ram_gb' => 16,
            'cpu_cores' => 8,
            'storage_amount_gb' => 240,
            'storage_type' => 'NVMe SSD',
            'bandwidth_tb' => 8,
            'price_monthly' => 48.00,
            'price_1_year' => 480.00,
            'country' => 'United States',
            'city' => 'New York',
        ]);

        $bareMetalPro = ServerOffer::create([
            'name' => 'Bare Metal Dedicated Pro',
            'type' => 'dedicated',
            'ram_gb' => 32,
            'cpu_cores' => 8,
            'storage_amount_gb' => 1000,
            'storage_type' => 'NVMe SSD',
            'bandwidth_tb' => 10,
            'gpu_model' => 'NVIDIA RTX 4080',
            'gpu_count' => 1,
            'price_monthly' => 120.00,
            'price_1_year' => 1200.00,
            'country' => 'Netherlands',
            'city' => 'Amsterdam',
        ]);

        $enterpriseDedicated = ServerOffer::create([
            'name' => 'Enterprise Fleet Dedicated',
            'type' => 'dedicated',
            'ram_gb' => 128,
            'cpu_cores' => 32,
            'storage_amount_gb' => 4000,
            'storage_type' => 'Enterprise NVMe RAID 10',
            'bandwidth_tb' => 25,
            'price_monthly' => 299.00,
            'price_1_year' => 2990.00,
            'country' => 'Finland',
            'city' => 'Helsinki',
        ]);

        // 2. Attach Selected Server Offers to Featured Offers (Landing Page Cards)
        Features::create([
            'server_offer_id' => $starterVps->id,
            'badge' => 'Budget Friendly',
            'button_text' => 'Deploy Rig',
            'sort_order' => 1,
            'is_highlighted' => false,
        ]);

        Features::create([
            'server_offer_id' => $proVps->id,
            'badge' => 'Most Popular',
            'button_text' => 'Get Started',
            'sort_order' => 2,
            'is_highlighted' => true, // Styled with the glowing border on the homepage
        ]);

        Features::create([
            'server_offer_id' => $bareMetalPro->id,
            'badge' => 'GPU Accelerated',
            'button_text' => 'Claim Dedicated Rig',
            'sort_order' => 3,
            'is_highlighted' => false,
        ]);
    }
}
