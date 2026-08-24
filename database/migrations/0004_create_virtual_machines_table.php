<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('virtual_machines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subscription_id')->unique()->constrained()->cascadeOnDelete();
            $table->foreignId('operating_system_id')->constrained('operating_systems');
            $table->string('name');
            $table->string('ip_address', 45);
            $table->integer('ssh_port')->default(22);
            $table->string('ssh_user')->default('root');
            $table->string('ssh_password_hash');
            $table->enum('status', ['running', 'stopped', 'provisioning'])->default('running');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('virtual_machines');
    }
};
