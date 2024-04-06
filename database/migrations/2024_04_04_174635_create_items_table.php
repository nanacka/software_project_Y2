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
        Schema::create('items', function (Blueprint $table) {
            //(title, description, image, dimensions, materials, make(handmade, store-bought) 
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('dimensions');
            $table->text('materials');
            $table->enum('make', ['handmade', 'store-bought']);
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
