<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'subscription_id',
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
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function subscription(): BelongsTo
    {
        return $this->belongsTo(Subscription::class);
    }

    /**
     * All messages/replies inside this ticket thread.
     */
    public function messages(): HasMany
    {
        return $this->hasMany(TicketMessage::class);
    }

    /**
     * Get the latest reply in the ticket thread.
     */
    public function latestMessage()
    {
        return $this->hasOne(TicketMessage::class)->latestOfMany();
    }
}
