<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

class VirtualMachine extends Model
{
    /** @use HasFactory<Factory<VirtualMachine>> */
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'subscription_id',
        'operating_system_id',
        'name',
        'ip_address',
        'ssh_port',
        'ssh_user',
        'ssh_password_hash',
        'status',
    ];

    protected $hidden = [
        'ssh_password_hash',
    ];

    protected function casts(): array
    {
        return [
            'ssh_port' => 'integer',
        ];
    }

    /**
     * Check if machine is running.
     */
    public function isRunning(): bool
    {
        return $this->status === 'running';
    }

    /**
     * Parent subscription that owns this provisioned instance.
     */
    /** @return BelongsTo<Subscription, $this> */
    public function subscription(): BelongsTo
    {
        return $this->belongsTo(Subscription::class);
    }

    /**
     * Operating system installed on this instance.
     */
    /** @return BelongsTo<OperatingSystem, $this> */
    public function operatingSystem(): BelongsTo
    {
        return $this->belongsTo(OperatingSystem::class);
    }

    /**
     * Optional preinstalled software applications attached to this VM.
     */
    /** @return BelongsToMany<AvailableApp, $this, Pivot, 'pivot'> */
    public function preinstalledApps(): BelongsToMany
    {
        return $this->belongsToMany(AvailableApp::class, 'vm_preinstalled_apps');
    }
}
