<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;

/**
 * @property string $billing_cycle
 * @property float|string $cost
 * @property string $status
 * @property Carbon|null $ends_at
 */
class Subscription extends Model
{
    /** @use HasFactory<Factory<Subscription>> */
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
        return $this->status === 'active' && ($this->ends_at?->isFuture() ?? false);
    }

    /**
     * Calculate monthly equivalent cost for user dashboard spending totals.
     */
    public function getMonthlyEquivalentCostAttribute(): float
    {
        return match ($this->billing_cycle) {
            'monthly' => (float) $this->cost,
            '6_months' => round((float) $this->cost / 6, 2),
            '1_year' => round((float) $this->cost / 12, 2),
            '2_years' => round((float) $this->cost / 24, 2),
            default => (float) $this->cost,
        };
    }

    /**
     * The user who owns this subscription.
     */
    /** @return BelongsTo<User, $this> */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The server offer template this subscription was purchased from.
     */
    /** @return BelongsTo<ServerOffer, $this> */
    public function serverOffer(): BelongsTo
    {
        return $this->belongsTo(ServerOffer::class);
    }

    /**
     * The simulated virtual machine provisioned for this subscription.
     */
    /** @return HasOne<VirtualMachine, $this> */
    public function virtualMachine(): HasOne
    {
        return $this->hasOne(VirtualMachine::class);
    }
}
