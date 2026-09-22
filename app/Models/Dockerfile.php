<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dockerfile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function userContainers(): HasMany
    {
        return $this->hasMany(UserContainer::class);
    }

    public function getRuntimeStatusAttribute(): string
    {
        return $this->userContainers->first()?->status ?? 'not started';
    }
}
