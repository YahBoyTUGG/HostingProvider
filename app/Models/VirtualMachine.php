<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class VirtualMachine extends Model
{
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
    public function subscription(): BelongsTo
    {
        return $this->belongsTo(Subscription::class);
    }

    /**
     * Operating system installed on this instance.
     */
    public function operatingSystem(): BelongsTo
    {
        return $this->belongsTo(OperatingSystem::class);
    }

    /**
     * Optional preinstalled software applications attached to this VM.
     */
    public function preinstalledApps(): BelongsToMany
    {
        return $this->belongsToMany(AvailableApp::class, 'vm_preinstalled_apps');
    }
}
