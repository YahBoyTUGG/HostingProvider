<?php

namespace Database\Seeders;

use App\Models\AvailableApp;
use App\Models\OperatingSystem;
use App\Models\ServerOffer;
use App\Models\Subscription;
use App\Models\Ticket;
use App\Models\TicketMessage;
use App\Models\User;
use App\Models\VirtualMachine;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use RuntimeException;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $isProduction = app()->environment('production');
        $adminEmail = $isProduction ? config('app.seed_admin_email') : 'admin@admin.com';
        $adminPassword = $isProduction ? config('app.seed_admin_password') : 'admin';

        if (
            $isProduction
            && (
                ! is_string($adminEmail)
                || $adminEmail === ''
                || ! is_string($adminPassword)
                || strlen($adminPassword) < 16
            )
        ) {
            throw new RuntimeException('Set SEED_ADMIN_EMAIL and a SEED_ADMIN_PASSWORD of at least 16 characters before production seeding.');
        }

        $admin = User::updateOrCreate(
            ['email' => $adminEmail],
            [
                'first_name' => 'Alex',
                'last_name' => 'Morgan',
                'living_address' => '100 Main Street, New York, NY',
                'phone_number' => '+12125550100',
                'password' => $adminPassword,
                'role' => 'admin',
            ],
        );

        $users = collect([
            [
                'first_name' => 'Emily',
                'last_name' => 'Carter',
                'email' => 'emily.carter@example.com',
                'legacy_email' => 'ana.petrova@example.com',
                'living_address' => '214 Oak Street, Austin, TX',
                'phone_number' => '+15125550101',
            ],
            [
                'first_name' => 'James',
                'last_name' => 'Mitchell',
                'email' => 'james.mitchell@example.com',
                'legacy_email' => 'marko.stojanov@example.com',
                'living_address' => '86 Pine Avenue, Seattle, WA',
                'phone_number' => '+12065550102',
            ],
            [
                'first_name' => 'Olivia',
                'last_name' => 'Brooks',
                'email' => 'olivia.brooks@example.com',
                'legacy_email' => 'elena.nikolova@example.com',
                'living_address' => '39 Maple Drive, Denver, CO',
                'phone_number' => '+13035550103',
            ],
            [
                'first_name' => 'Michael',
                'last_name' => 'Reed',
                'email' => 'michael.reed@example.com',
                'legacy_email' => 'stefan.ristovski@example.com',
                'living_address' => '512 Cedar Lane, Raleigh, NC',
                'phone_number' => '+19195550104',
            ],
            [
                'first_name' => 'Sophia',
                'last_name' => 'Hayes',
                'email' => 'sophia.hayes@example.com',
                'legacy_email' => 'ivana.trajkovska@example.com',
                'living_address' => '72 Birch Road, Portland, OR',
                'phone_number' => '+15035550105',
            ],
            [
                'first_name' => 'Benjamin',
                'last_name' => 'Foster',
                'email' => 'benjamin.foster@example.com',
                'legacy_email' => 'damjan.iliev@example.com',
                'living_address' => '905 Lakeview Boulevard, Chicago, IL',
                'phone_number' => '+13125550106',
            ],
            [
                'first_name' => 'Ava',
                'last_name' => 'Turner',
                'email' => 'ava.turner@example.com',
                'living_address' => '18 Sunset Drive, Phoenix, AZ',
                'phone_number' => '+16025550107',
            ],
            [
                'first_name' => 'William',
                'last_name' => 'Parker',
                'email' => 'william.parker@example.com',
                'living_address' => '440 River Street, Boston, MA',
                'phone_number' => '+16175550108',
            ],
            [
                'first_name' => 'Grace',
                'last_name' => 'Morgan',
                'email' => 'grace.morgan@example.com',
                'living_address' => '63 Hillcrest Way, Nashville, TN',
                'phone_number' => '+16155550109',
            ],
            [
                'first_name' => 'Ethan',
                'last_name' => 'Coleman',
                'email' => 'ethan.coleman@example.com',
                'living_address' => '277 Harbor Street, San Diego, CA',
                'phone_number' => '+16195550110',
            ],
        ])->map(function (array $attributes) use ($isProduction): User {
            $legacyEmail = $attributes['legacy_email'] ?? null;
            unset($attributes['legacy_email']);

            $user = $legacyEmail ? User::where('email', $legacyEmail)->first() : null;
            if ($user) {
                $user->update([
                    ...$attributes,
                    'password' => $isProduction ? Str::random(64) : 'password',
                    'role' => 'user',
                ]);

                return $user;
            }

            return User::updateOrCreate(
                ['email' => $attributes['email']],
                [
                    ...$attributes,
                    'password' => $isProduction ? Str::random(64) : 'password',
                    'role' => 'user',
                ],
            );
        });

        $operatingSystems = collect([
            ['name' => 'Ubuntu', 'version' => '24.04 LTS', 'type' => 'both'],
            ['name' => 'Debian', 'version' => '12', 'type' => 'both'],
            ['name' => 'AlmaLinux', 'version' => '9', 'type' => 'vps'],
        ])->mapWithKeys(fn (array $attributes) => [
            $attributes['name'] => OperatingSystem::updateOrCreate(
                [
                    'name' => $attributes['name'],
                    'version' => $attributes['version'],
                ],
                ['type' => $attributes['type'], 'is_active' => true],
            ),
        ]);

        foreach ([
            ['name' => 'Docker', 'slug' => 'docker'],
            ['name' => 'Nginx Web Server', 'slug' => 'nginx'],
            ['name' => 'Node.js Runtime', 'slug' => 'nodejs'],
        ] as $app) {
            AvailableApp::updateOrCreate(
                ['slug' => $app['slug']],
                ['name' => $app['name'], 'is_active' => true],
            );
        }

        $offerData = [
            'Starter Virtual VPS' => [
                'ram_gb' => 2, 'cpu_cores' => 1, 'storage_amount_gb' => 30,
                'storage_type' => 'NVMe SSD', 'bandwidth_tb' => 2,
                'gpu_model' => null, 'gpu_count' => 0,
                'price_monthly' => 6, 'price_1_year' => 60,
                'country' => 'Germany', 'city' => 'Frankfurt',
            ],
            'Velocity Pro Virtual VPS' => [
                'ram_gb' => 8, 'cpu_cores' => 4, 'storage_amount_gb' => 120,
                'storage_type' => 'NVMe SSD', 'bandwidth_tb' => 5,
                'gpu_model' => null, 'gpu_count' => 0,
                'price_monthly' => 24, 'price_1_year' => 240,
                'country' => 'Germany', 'city' => 'Frankfurt',
            ],
            'Compute Virtual VPS' => [
                'ram_gb' => 16, 'cpu_cores' => 8, 'storage_amount_gb' => 250,
                'storage_type' => 'NVMe SSD', 'bandwidth_tb' => 8,
                'gpu_model' => null, 'gpu_count' => 0,
                'price_monthly' => 48, 'price_1_year' => 480,
                'country' => 'United States', 'city' => 'New York',
            ],
            'Launch VPS' => [
                'ram_gb' => 4, 'cpu_cores' => 2, 'storage_amount_gb' => 60,
                'storage_type' => 'NVMe SSD', 'bandwidth_tb' => 3,
                'gpu_model' => null, 'gpu_count' => 0,
                'price_monthly' => 12, 'price_1_year' => 120,
                'country' => 'United States', 'city' => 'Austin',
            ],
            'Developer VPS' => [
                'ram_gb' => 12, 'cpu_cores' => 6, 'storage_amount_gb' => 180,
                'storage_type' => 'NVMe SSD', 'bandwidth_tb' => 6,
                'gpu_model' => null, 'gpu_count' => 0,
                'price_monthly' => 36, 'price_1_year' => 360,
                'country' => 'United States', 'city' => 'Seattle',
            ],
            'Memory Plus VPS' => [
                'ram_gb' => 32, 'cpu_cores' => 8, 'storage_amount_gb' => 300,
                'storage_type' => 'NVMe SSD', 'bandwidth_tb' => 10,
                'gpu_model' => null, 'gpu_count' => 0,
                'price_monthly' => 72, 'price_1_year' => 720,
                'country' => 'United States', 'city' => 'Chicago',
            ],
            'Storage Vault VPS' => [
                'ram_gb' => 16, 'cpu_cores' => 6, 'storage_amount_gb' => 1500,
                'storage_type' => 'Enterprise NVMe RAID 10', 'bandwidth_tb' => 12,
                'gpu_model' => null, 'gpu_count' => 0,
                'price_monthly' => 84, 'price_1_year' => 840,
                'country' => 'United States', 'city' => 'Dallas',
            ],
            'Inference L4' => [
                'ram_gb' => 32, 'cpu_cores' => 12, 'storage_amount_gb' => 500,
                'storage_type' => 'NVMe SSD', 'bandwidth_tb' => 10,
                'gpu_model' => 'NVIDIA L4', 'gpu_count' => 1,
                'price_monthly' => 180, 'price_1_year' => 1800,
                'country' => 'Netherlands', 'city' => 'Amsterdam',
            ],
            'Tensor A10' => [
                'ram_gb' => 64, 'cpu_cores' => 16, 'storage_amount_gb' => 1000,
                'storage_type' => 'NVMe SSD', 'bandwidth_tb' => 15,
                'gpu_model' => 'NVIDIA A10', 'gpu_count' => 1,
                'price_monthly' => 320, 'price_1_year' => 3200,
                'country' => 'Finland', 'city' => 'Helsinki',
            ],
            'Accelerator A100' => [
                'ram_gb' => 128, 'cpu_cores' => 32, 'storage_amount_gb' => 2000,
                'storage_type' => 'Enterprise NVMe RAID 10', 'bandwidth_tb' => 25,
                'gpu_model' => 'NVIDIA A100', 'gpu_count' => 2,
                'price_monthly' => 850, 'price_1_year' => 8500,
                'country' => 'United States', 'city' => 'New York',
            ],
            'Inference L40S' => [
                'ram_gb' => 64, 'cpu_cores' => 24, 'storage_amount_gb' => 1000,
                'storage_type' => 'Enterprise NVMe RAID 10', 'bandwidth_tb' => 20,
                'gpu_model' => 'NVIDIA L40S', 'gpu_count' => 1,
                'price_monthly' => 520, 'price_1_year' => 5200,
                'country' => 'United States', 'city' => 'Seattle',
            ],
            'Deep Learning H100' => [
                'ram_gb' => 256, 'cpu_cores' => 48, 'storage_amount_gb' => 3000,
                'storage_type' => 'Enterprise NVMe RAID 10', 'bandwidth_tb' => 30,
                'gpu_model' => 'NVIDIA H100', 'gpu_count' => 2,
                'price_monthly' => 2400, 'price_1_year' => 24000,
                'country' => 'United States', 'city' => 'New York',
            ],
        ];

        $offers = collect($offerData)->map(
            fn (array $attributes, string $name) => ServerOffer::updateOrCreate(
                ['name' => $name],
                [...$attributes, 'type' => 'vps', 'is_active' => true],
            ),
        );

        $defaultOffer = $offers['Velocity Pro Virtual VPS'];
        $gpuReplacement = $offers['Tensor A10'];

        foreach ([
            'Virtual GPU L4' => 'Inference L4',
            'Virtual GPU A10' => 'Tensor A10',
            'Virtual GPU A100' => 'Accelerator A100',
        ] as $oldName => $newName) {
            ServerOffer::where('name', $oldName)->get()->each(
                function (ServerOffer $oldOffer) use ($offers, $newName): void {
                    Subscription::where('server_offer_id', $oldOffer->id)
                        ->update(['server_offer_id' => $offers[$newName]->id]);
                    $oldOffer->delete();
                },
            );
        }

        ServerOffer::where('type', 'dedicated')->get()->each(
            function (ServerOffer $oldOffer) use ($defaultOffer, $gpuReplacement): void {
                $replacement = $oldOffer->gpu_count > 0 ? $gpuReplacement : $defaultOffer;
                Subscription::where('server_offer_id', $oldOffer->id)
                    ->update(['server_offer_id' => $replacement->id]);
                $oldOffer->delete();
            },
        );

        $subscriptionSpecs = [
            ['user' => 0, 'offer' => 'Starter Virtual VPS', 'status' => 'active', 'vm_status' => 'running', 'os' => 'Ubuntu', 'ip' => '198.51.100.10'],
            ['user' => 0, 'offer' => 'Inference L4', 'status' => 'active', 'vm_status' => 'running', 'os' => 'Ubuntu', 'ip' => '198.51.100.11'],
            ['user' => 1, 'offer' => 'Velocity Pro Virtual VPS', 'status' => 'active', 'vm_status' => 'stopped', 'os' => 'Debian', 'ip' => '198.51.100.12'],
            ['user' => 1, 'offer' => 'Compute Virtual VPS', 'status' => 'active', 'vm_status' => 'running', 'os' => 'AlmaLinux', 'ip' => '198.51.100.13'],
            ['user' => 2, 'offer' => 'Tensor A10', 'status' => 'active', 'vm_status' => 'provisioning', 'os' => 'Ubuntu', 'ip' => '198.51.100.14'],
            ['user' => 3, 'offer' => 'Starter Virtual VPS', 'status' => 'active', 'vm_status' => 'running', 'os' => 'Debian', 'ip' => '198.51.100.15'],
            ['user' => 4, 'offer' => 'Accelerator A100', 'status' => 'active', 'vm_status' => 'running', 'os' => 'Ubuntu', 'ip' => '198.51.100.16'],
            ['user' => 5, 'offer' => 'Velocity Pro Virtual VPS', 'status' => 'active', 'vm_status' => 'stopped', 'os' => 'AlmaLinux', 'ip' => '198.51.100.17'],
            ['user' => 2, 'offer' => 'Launch VPS', 'status' => 'active', 'vm_status' => 'running', 'os' => 'Debian', 'ip' => '198.51.100.18'],
            ['user' => 3, 'offer' => 'Developer VPS', 'status' => 'active', 'vm_status' => 'running', 'os' => 'Ubuntu', 'ip' => '198.51.100.19'],
            ['user' => 4, 'offer' => 'Memory Plus VPS', 'status' => 'active', 'vm_status' => 'stopped', 'os' => 'AlmaLinux', 'ip' => '198.51.100.20'],
            ['user' => 5, 'offer' => 'Storage Vault VPS', 'status' => 'active', 'vm_status' => 'running', 'os' => 'Debian', 'ip' => '198.51.100.21'],
            ['user' => 6, 'offer' => 'Launch VPS', 'status' => 'active', 'vm_status' => 'running', 'os' => 'Ubuntu', 'ip' => '198.51.100.22'],
            ['user' => 6, 'offer' => 'Inference L40S', 'status' => 'active', 'vm_status' => 'provisioning', 'os' => 'Ubuntu', 'ip' => '198.51.100.23'],
            ['user' => 7, 'offer' => 'Developer VPS', 'status' => 'active', 'vm_status' => 'running', 'os' => 'Debian', 'ip' => '198.51.100.24'],
            ['user' => 7, 'offer' => 'Deep Learning H100', 'status' => 'active', 'vm_status' => 'running', 'os' => 'Ubuntu', 'ip' => '198.51.100.25'],
            ['user' => 8, 'offer' => 'Memory Plus VPS', 'status' => 'active', 'vm_status' => 'stopped', 'os' => 'AlmaLinux', 'ip' => '198.51.100.26'],
            ['user' => 9, 'offer' => 'Storage Vault VPS', 'status' => 'active', 'vm_status' => 'running', 'os' => 'Ubuntu', 'ip' => '198.51.100.27'],
            ['user' => 0, 'offer' => 'Launch VPS', 'status' => 'cancelled', 'vm_status' => 'stopped', 'os' => 'Ubuntu', 'ip' => '198.51.100.28'],
            ['user' => 1, 'offer' => 'Developer VPS', 'status' => 'expired', 'vm_status' => 'stopped', 'os' => 'Debian', 'ip' => '198.51.100.29'],
        ];

        $subscriptions = collect($subscriptionSpecs)->map(
            function (array $spec) use ($users, $offers, $operatingSystems, $isProduction): Subscription {
                $offer = $offers[$spec['offer']];
                $subscription = Subscription::updateOrCreate(
                    [
                        'user_id' => $users[$spec['user']]->id,
                        'server_offer_id' => $offer->id,
                    ],
                    [
                        'billing_cycle' => 'monthly',
                        'cost' => $offer->price_monthly,
                        'status' => $spec['status'],
                        'starts_at' => now()->subMonths(2),
                        'ends_at' => now()->addMonths(10),
                    ],
                );

                VirtualMachine::updateOrCreate(
                    ['subscription_id' => $subscription->id],
                    [
                        'operating_system_id' => $operatingSystems[$spec['os']]->id,
                        'name' => strtolower(str_replace(' ', '-', $users[$spec['user']]->first_name)).'-vm-'.$subscription->id,
                        'ip_address' => $spec['ip'],
                        'ssh_port' => 22,
                        'ssh_user' => 'root',
                        'ssh_password_hash' => Hash::make(
                            $isProduction ? Str::random(64) : 'seeded-vm-password',
                        ),
                        'status' => $spec['vm_status'],
                    ],
                );

                return $subscription;
            },
        );

        $ticketSpecs = [
            ['user' => 0, 'subject' => 'Help configuring my VPS', 'service' => 'Plan', 'priority' => 'normal', 'status' => 'open', 'subscription' => 0, 'message' => 'Could you help me configure the firewall on my VPS?', 'reply' => null],
            ['user' => 0, 'subject' => 'Inference server setup question', 'service' => 'Plan', 'priority' => 'high', 'status' => 'answered', 'subscription' => 1, 'message' => 'I need help preparing the inference server for an ML workload.', 'reply' => 'The instance is ready. Please install the NVIDIA driver from the supported repository for your operating system.'],
            ['user' => 1, 'subject' => 'Billing cycle information', 'service' => 'Billing and payments', 'priority' => 'low', 'status' => 'closed', 'subscription' => 2, 'message' => 'Where can I see the next billing date?', 'reply' => 'Your next billing date is listed in Billing & Subscription History on your dashboard.'],
            ['user' => 2, 'subject' => 'Instance provisioning status', 'service' => 'Plan', 'priority' => 'high', 'status' => 'open', 'subscription' => 4, 'message' => 'My virtual machine is still provisioning. Can you check its status?', 'reply' => null],
            ['user' => 3, 'subject' => 'SSH connection assistance', 'service' => 'Networking', 'priority' => 'normal', 'status' => 'answered', 'subscription' => 5, 'message' => 'I cannot connect to my server over SSH.', 'reply' => 'Please verify that you are using the listed IP address and port 22, and that your client network allows outbound SSH.'],
            ['user' => 4, 'subject' => 'A100 workload limits', 'service' => 'Plan', 'priority' => 'normal', 'status' => 'closed', 'subscription' => 6, 'message' => 'Can you clarify the resource limits for my A100 virtual server?', 'reply' => 'The CPU, memory, storage, and bandwidth limits are shown on the server offer and your subscription details.'],
            ['user' => 5, 'subject' => 'Account access question', 'service' => 'Account access', 'priority' => 'low', 'status' => 'open', 'subscription' => null, 'message' => 'How can I update my account contact information?', 'reply' => null],
            ['user' => 2, 'subject' => 'Adding a firewall rule', 'service' => 'Networking', 'priority' => 'normal', 'status' => 'answered', 'subscription' => 8, 'message' => 'I need to allow HTTPS traffic to my application. Which firewall rule should I add?', 'reply' => 'Add an inbound TCP rule for port 443 and limit the source range to the networks that need access.'],
            ['user' => 3, 'subject' => 'Developer environment image', 'service' => 'Plan', 'priority' => 'low', 'status' => 'open', 'subscription' => 9, 'message' => 'Is there a recommended way to install a development toolchain on this instance?', 'reply' => null],
            ['user' => 4, 'subject' => 'Changing my plan', 'service' => 'Billing and payments', 'priority' => 'normal', 'status' => 'open', 'subscription' => 10, 'message' => 'Can I move to a larger plan without losing my data?', 'reply' => null],
            ['user' => 5, 'subject' => 'Storage volume question', 'service' => 'Plan', 'priority' => 'normal', 'status' => 'answered', 'subscription' => 11, 'message' => 'How can I check the available space on the storage volume?', 'reply' => 'Use df -h from your SSH session to review mounted filesystems and available capacity.'],
            ['user' => 6, 'subject' => 'L40S driver support', 'service' => 'Plan', 'priority' => 'high', 'status' => 'open', 'subscription' => 13, 'message' => 'Which driver branch should I use for the L40S instance?', 'reply' => null],
            ['user' => 7, 'subject' => 'H100 instance access', 'service' => 'Networking', 'priority' => 'high', 'status' => 'answered', 'subscription' => 15, 'message' => 'I cannot reach the H100 instance from my office network.', 'reply' => 'Please verify your office network allows outbound SSH on port 22 and confirm the instance IP address.'],
            ['user' => 8, 'subject' => 'Memory plan metrics', 'service' => 'Plan', 'priority' => 'low', 'status' => 'closed', 'subscription' => 16, 'message' => 'Where can I monitor memory usage on my server?', 'reply' => 'You can check current memory usage with free -h over SSH.'],
            ['user' => 9, 'subject' => 'Server maintenance window', 'service' => 'General inquiry', 'priority' => 'normal', 'status' => 'open', 'subscription' => 17, 'message' => 'How will I be notified about planned maintenance?', 'reply' => null],
        ];

        foreach ($ticketSpecs as $spec) {
            $ticket = Ticket::updateOrCreate(
                [
                    'user_id' => $users[$spec['user']]->id,
                    'subject' => $spec['subject'],
                ],
                [
                    'subscription_id' => $spec['subscription'] === null
                        ? null
                        : $subscriptions[$spec['subscription']]->id,
                    'affected_service' => $spec['service'],
                    'priority' => $spec['priority'],
                    'status' => $spec['status'],
                ],
            );

            $message = TicketMessage::firstOrCreate(
                [
                    'ticket_id' => $ticket->id,
                    'user_id' => $users[$spec['user']]->id,
                    'message' => $spec['message'],
                ],
            );
            $message->created_at = now()->subDays(10 - $spec['user']);
            $message->save();

            if ($spec['reply'] !== null) {
                TicketMessage::firstOrCreate(
                    [
                        'ticket_id' => $ticket->id,
                        'user_id' => $admin->id,
                        'message' => $spec['reply'],
                    ],
                    ['created_at' => now()->subDays(8 - $spec['user'])],
                );
            }
        }

        $this->call(FeaturesSeeder::class);
    }
}
