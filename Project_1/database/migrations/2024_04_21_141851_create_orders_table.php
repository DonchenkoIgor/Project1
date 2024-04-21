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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('companyId');
            $table->integer('workerId');
            $table->integer('serviceId');
            $table->timestamp('timeslot');
            $table->float('price');
            $table->timestamps();

            $table->foreign('companyId')->references('id')->on('companies');
            $table->foreign('workerId')->references('id')->on('workers');
            $table->foreign('serviceId')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
