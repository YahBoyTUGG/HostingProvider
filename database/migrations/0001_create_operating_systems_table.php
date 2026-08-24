<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Defined list of available operating systems per server architecture
        Schema::create('operating_systems', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., Ubuntu, Debian, AlmaLinux, Windows Server
            $table->string('version'); // e.g., 24.04 LTS, 12, 2022
            $table->enum('type', ['vps', 'dedicated', 'both'])->default('both');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('operating_systems');
    }
};
