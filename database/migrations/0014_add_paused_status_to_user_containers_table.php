<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('user_containers', function (Blueprint $table) {
            $table->enum('status', ['running', 'stopped', 'provisioning', 'error', 'paused'])
                ->default('provisioning')
                ->change();
        });
    }

    public function down(): void
    {
        Schema::table('user_containers', function (Blueprint $table) {
            $table->enum('status', ['running', 'stopped', 'provisioning', 'error'])
                ->default('provisioning')
                ->change();
        });
    }
};
