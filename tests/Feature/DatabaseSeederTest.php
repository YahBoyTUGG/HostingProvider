<?php

use App\Models\ServerOffer;
use App\Models\Subscription;
use App\Models\Ticket;
use App\Models\User;
use App\Models\VirtualMachine;
use Database\Seeders\DatabaseSeeder;

it('seeds virtual server plans, customer accounts, subscriptions, virtual machines, and tickets', function () {
    $this->seed(DatabaseSeeder::class);

    expect(User::where('role', 'user')->count())->toBe(10)
        ->and(ServerOffer::where('type', 'dedicated')->count())->toBe(0)
        ->and(ServerOffer::count())->toBe(12)
        ->and(ServerOffer::where('name', 'like', '%GPU%')->count())->toBe(0)
        ->and(ServerOffer::whereIn('name', ['Virtual GPU L4', 'Virtual GPU A10', 'Virtual GPU A100'])->count())->toBe(0)
        ->and(ServerOffer::whereNotNull('gpu_model')->pluck('gpu_model')->all())
        ->toContain('NVIDIA L4', 'NVIDIA A10', 'NVIDIA A100', 'NVIDIA L40S', 'NVIDIA H100')
        ->and(ServerOffer::where('gpu_model', 'like', '%RTX%')->count())->toBe(0)
        ->and(User::where('email', 'emily.carter@example.com')->value('first_name'))->toBe('Emily')
        ->and(Subscription::count())->toBe(20)
        ->and(Subscription::where('status', 'cancelled')->count())->toBe(1)
        ->and(Subscription::where('status', 'expired')->count())->toBe(1)
        ->and(VirtualMachine::count())->toBe(20)
        ->and(VirtualMachine::where('status', 'provisioning')->count())->toBeGreaterThan(0)
        ->and(Ticket::count())->toBe(15);

    $this->seed(DatabaseSeeder::class);

    expect(User::where('role', 'user')->count())->toBe(10)
        ->and(ServerOffer::count())->toBe(12)
        ->and(Subscription::count())->toBe(20)
        ->and(Subscription::where('status', 'cancelled')->count())->toBe(1)
        ->and(Subscription::where('status', 'expired')->count())->toBe(1)
        ->and(VirtualMachine::count())->toBe(20)
        ->and(Ticket::count())->toBe(15);
});
