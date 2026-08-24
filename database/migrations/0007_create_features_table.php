<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->foreignId('server_offer_id')
                  ->constrained('server_offers')
                  ->cascadeOnDelete();

            $table->string('badge')->nullable(); // e.g. "Most Popular", "Best Value"
            $table->string('button_text')->default('Deploy Rig');
            $table->integer('sort_order')->default(0);
            $table->boolean('is_highlighted')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('features');
    }
};
