<?php

namespace Database\Seeders;

use App\Models\Features;
use App\Models\ServerOffer;
use Illuminate\Database\Seeder;

class FeaturesSeeder extends Seeder
{
    public function run(): void
    {
        $featuredOffers = [
            [
                'offer' => 'Starter Virtual VPS',
                'badge' => 'Budget Friendly',
                'button_text' => 'Deploy Rig',
                'sort_order' => 1,
                'is_highlighted' => false,
            ],
            [
                'offer' => 'Velocity Pro Virtual VPS',
                'badge' => 'Most Popular',
                'button_text' => 'Get Started',
                'sort_order' => 2,
                'is_highlighted' => true,
            ],
            [
                'offer' => 'Inference L4',
                'badge' => 'GPU Accelerated',
                'button_text' => 'Explore GPU VPS',
                'sort_order' => 3,
                'is_highlighted' => false,
            ],
        ];

        foreach ($featuredOffers as $featuredOffer) {
            $serverOffer = ServerOffer::where('name', $featuredOffer['offer'])->firstOrFail();

            Features::updateOrCreate(
                ['server_offer_id' => $serverOffer->id],
                [
                    'badge' => $featuredOffer['badge'],
                    'button_text' => $featuredOffer['button_text'],
                    'sort_order' => $featuredOffer['sort_order'],
                    'is_highlighted' => $featuredOffer['is_highlighted'],
                ],
            );
        }
    }
}
