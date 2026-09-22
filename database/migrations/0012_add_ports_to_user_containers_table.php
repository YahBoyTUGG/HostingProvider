<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('user_containers', function (Blueprint $table) {
            $table->unsignedSmallInteger('container_port')->nullable()->after('container_id');
            $table->unsignedSmallInteger('host_port')->nullable()->unique()->after('container_port');
        });
    }

    public function down(): void
    {
        Schema::table('user_containers', function (Blueprint $table) {
            $table->dropUnique(['host_port']);
            $table->dropColumn(['container_port', 'host_port']);
        });
    }
};
