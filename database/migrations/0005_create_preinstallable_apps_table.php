<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Global catalog of available apps to preinstall during checkout
        Schema::create('available_apps', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., Docker, Nginx, PostgreSQL, Node.js
            $table->string('slug')->unique();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Pivot table connecting provisioned VMs to selected preinstalled apps
        Schema::create('vm_preinstalled_apps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('virtual_machine_id')->constrained()->cascadeOnDelete();
            $table->foreignId('available_app_id')->constrained('available_apps')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vm_preinstalled_apps');
        Schema::dropIfExists('available_apps');
    }
};
