<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OperatingSystem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'version',
        'type',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    /**
     * Display name accessor (e.g. "Ubuntu 24.04 LTS").
     */
    public function getFullNameAttribute(): string
    {
        return "{$this->name} {$this->version}";
    }

    /**
     * Virtual machines provisioned using this OS.
     */
    public function virtualMachines(): HasMany
    {
        return $this->hasMany(VirtualMachine::class);
    }
}
