<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('vegetables', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('category_id')->index()->nullable();
            $table->unsignedBigInteger('seller_id')->index()->nullable();
            $table->decimal('price', 8, 2);
            $table->enum('availability', ['In stock', 'Out of stock']);
            $table->text('description');
            $table->unsignedBigInteger('origin_id')->index()->nullable();
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('origin_id')->references('id')->on('origins')->onDelete('set null');
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('set null');

        });
    }

    public function down()
    {
        Schema::dropIfExists('vegetables');
    }
};
