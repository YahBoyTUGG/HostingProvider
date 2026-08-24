<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ServerOffer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'ram_gb',
        'cpu_cores',
        'storage_amount_gb',
        'storage_type',
        'bandwidth_tb',
        'gpu_model',
        'gpu_count',
        'price_monthly',
        'price_6_months',
        'price_1_year',
        'price_2_years',
        'country',
        'city',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'ram_gb' => 'integer',
            'cpu_cores' => 'integer',
            'storage_amount_gb' => 'integer',
            'bandwidth_tb' => 'integer',
            'gpu_count' => 'integer',
            'price_monthly' => 'decimal:2',
            'price_6_months' => 'decimal:2',
            'price_1_year' => 'decimal:2',
            'price_2_years' => 'decimal:2',
            'is_active' => 'boolean',
        ];
    }

    /**
     * Active subscriptions purchased from this server offer.
     */
    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }
}
