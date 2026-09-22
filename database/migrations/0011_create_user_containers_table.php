<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_containers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('dockerfile_id')->constrained()->cascadeOnDelete();
            $table->string('container_id')->nullable();
            $table->enum('status', ['running', 'stopped', 'provisioning', 'error'])->default('provisioning');
            $table->unsignedInteger('memory_limit_mb')->default(512);
            $table->decimal('cpu_limit_cores', 5, 2)->default(1.00);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_containers');
    }
};
