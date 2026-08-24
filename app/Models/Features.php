<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Features extends Model
{
    use HasFactory;

    protected $fillable = [
        'server_offer_id',
        'badge',
        'button_text',
        'sort_order',
        'is_highlighted',
    ];

    protected function casts(): array
    {
        return [
            'is_highlighted' => 'boolean',
        ];
    }

    public function server_offer(): BelongsTo
    {
        return $this->belongsTo(ServerOffer::class);
    }
}
