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
        Schema::create('Dishes', function (Blueprint $table) {
            $table->id('id_dish');
            $table->string('title');
            $table->integer('rating');
            $table->foreignId('id_sub')->references('id_sub')->on('Subcategories');
            $table->boolean('isFavour');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dishes');
    }
};
