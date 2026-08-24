<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('server_offers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['vps', 'dedicated']);
            $table->unsignedInteger('ram_gb');
            $table->unsignedInteger('cpu_cores');
            $table->unsignedInteger('storage_amount_gb');
            $table->string('storage_type'); // NVMe SSD, SATA SSD, Enterprise HDD, etc.
            $table->unsignedInteger('bandwidth_tb');
            $table->string('gpu_model')->nullable();
            $table->unsignedInteger('gpu_count')->default(0);

            // Mandatory billing cycles
            $table->decimal('price_monthly', 10, 2);
            $table->decimal('price_1_year', 10, 2);

            // Optional billing cycles
            $table->decimal('price_6_months', 10, 2)->nullable();
            $table->decimal('price_2_years', 10, 2)->nullable();

            // Location specifics
            $table->string('country');
            $table->string('city');

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('server_offers');
    }
};
