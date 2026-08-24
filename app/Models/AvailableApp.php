<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AvailableApp extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    /**
     * Virtual machines that opted for this preinstalled application.
     */
    public function virtualMachines(): BelongsToMany
    {
        return $this->belongsToMany(VirtualMachine::class, 'vm_preinstalled_apps');
    }
}
