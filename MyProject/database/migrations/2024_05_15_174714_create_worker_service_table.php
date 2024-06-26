<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('worker_service', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Worker::class);
            $table->foreignIdFor(\App\Models\Service::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('worker_service');
    }
};
