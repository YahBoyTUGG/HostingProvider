<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\OperatingSystem;
use App\Models\AvailableApp;
use App\Models\ServerOffer;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@admin.com',
            'living_address' => 'Bulevar Hosting, Skopje',
            'phone_number' => '+38970000000',
            'password' => 'admin',
            'role' => 'admin',
        ]);

        // Default Operating Systems
        OperatingSystem::create(['name' => 'Ubuntu', 'version' => '24.04 LTS', 'type' => 'both']);
        OperatingSystem::create(['name' => 'Debian', 'version' => '12', 'type' => 'both']);
        OperatingSystem::create(['name' => 'AlmaLinux', 'version' => '9', 'type' => 'vps']);

        // Preinstalled Apps Catalog
        AvailableApp::create(['name' => 'Docker', 'slug' => 'docker']);
        AvailableApp::create(['name' => 'Nginx Web Server', 'slug' => 'nginx']);
        AvailableApp::create(['name' => 'Node.js Runtime', 'slug' => 'nodejs']);

        // Base Server Offers
        ServerOffer::create([
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

        ServerOffer::create([
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
    }
}
