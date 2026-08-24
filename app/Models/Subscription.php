<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'server_offer_id',
        'billing_cycle',
        'cost',
        'status',
        'starts_at',
        'ends_at',
    ];

    protected function casts(): array
    {
        return [
            'cost' => 'decimal:2',
            'starts_at' => 'datetime',
            'ends_at' => 'datetime',
        ];
    }

    /**
     * Check if the subscription is currently active.
     */
    public function isActive(): bool
    {
        return $this->status === 'active' && $this->ends_at->isFuture();
    }

    /**
     * Calculate monthly equivalent cost for user dashboard spending totals.
     */
    public function getMonthlyEquivalentCostAttribute(): float
    {
        return match ($this->billing_cycle) {
            'monthly' => (float) $this->cost,
            '6_months' => round($this->cost / 6, 2),
            '1_year' => round($this->cost / 12, 2),
            '2_years' => round($this->cost / 24, 2),
            default => (float) $this->cost,
        };
    }

    /**
     * The user who owns this subscription.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The server offer template this subscription was purchased from.
     */
    public function serverOffer(): BelongsTo
    {
        return $this->belongsTo(ServerOffer::class);
    }

    /**
     * The simulated virtual machine provisioned for this subscription.
     */
    public function virtualMachine(): HasOne
    {
        return $this->hasOne(VirtualMachine::class);
    }
}
