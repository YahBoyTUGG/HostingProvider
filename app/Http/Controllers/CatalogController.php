<?php

namespace App\Http\Controllers;

use App\Models\ServerOffer;
use Inertia\Inertia;
use Inertia\Response;

class CatalogController extends Controller
{
    /**
     * Display the server offer catalog page.
     */
    public function index(): Response
    {
        $offers = ServerOffer::query()
            ->where('is_active', true)
            ->get()
            ->map(function ($offer) {
                return [
                    'id' => $offer->id,
                    'name' => $offer->name,
                    'type' => $offer->type ?? 'vps',
                    'price_monthly' => (float) $offer->price_monthly,
                    'cpu_cores' => (int) $offer->cpu_cores,
                    'ram_gb' => (int) $offer->ram_gb,
                    'storage_type' => $offer->storage_type,
                    'storage_gb' => (int) $offer->storage_amount_gb,
                    'bandwidth_tb' => (float) ($offer->bandwidth_tb ?? 1),
                    'has_gpu' => (int) ($offer->gpu_count ?? 0),
                    'durations' => $offer->durations ?? ['monthly', 'quarterly', 'yearly'],
                ];
            });

        return Inertia::render('Catalog', [
            'offers' => $offers,
        ]);
    }
}
