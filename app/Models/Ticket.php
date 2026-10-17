<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Ticket extends Model
{
    /** @use HasFactory<Factory<Ticket>> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'subscription_id',
        'affected_service',
        'subject',
        'priority',
        'status',
    ];

    /**
     * Check if ticket is closed.
     */
    public function isClosed(): bool
    {
        return $this->status === 'closed';
    }

    /**
     * The user who opened the support ticket.
     */
    /** @return BelongsTo<User, $this> */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /** @return BelongsTo<Subscription, $this> */
    public function subscription(): BelongsTo
    {
        return $this->belongsTo(Subscription::class);
    }

    /**
     * All messages/replies inside this ticket thread.
     */
    /** @return HasMany<TicketMessage, $this> */
    public function messages(): HasMany
    {
        return $this->hasMany(TicketMessage::class);
    }

    /**
     * Get the latest reply in the ticket thread.
     */
    /** @return HasOne<TicketMessage, $this> */
    public function latestMessage(): HasOne
    {
        return $this->hasOne(TicketMessage::class)->latestOfMany();
    }
}
