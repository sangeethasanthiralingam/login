<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nutritional_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vegetable_id');
            $table->string('nutrient');
            $table->string('amount_per_100g');
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('vegetable_id')->references('id')->on('vegetables');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nutritional_information');
    }
};
