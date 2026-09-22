<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserContainer extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'memory_limit_mb' => 'integer',
            'cpu_limit_cores' => 'float',
            'container_port' => 'integer',
            'host_port' => 'integer',
            'is_paused' => 'boolean',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function dockerfile(): BelongsTo
    {
        return $this->belongsTo(Dockerfile::class);
    }
}
