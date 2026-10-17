<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AvailableApp extends Model
{
    /** @use HasFactory<Factory<AvailableApp>> */
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
    /** @return BelongsToMany<VirtualMachine, $this, Pivot, 'pivot'> */
    public function virtualMachines(): BelongsToMany
    {
        return $this->belongsToMany(VirtualMachine::class, 'vm_preinstalled_apps');
    }
}
