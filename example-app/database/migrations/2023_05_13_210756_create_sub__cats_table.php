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
        Schema::create('Sub_Cat', function (Blueprint $table) {
            $table->id('id_rel');
            $table->foreignId('id_cat')->references('id_cat')->on('Categories');
            $table->foreignId('id_sub')->references('id_sub')->on('Subcategories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub__cats');
    }
};
