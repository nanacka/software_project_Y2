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
        // Create the images table
        Schema::create('post_images', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('post_id')->constrained()->cascadeOnDelete();
            $table->string('image')->default('cover.png');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        // Drop the images table
        Schema::dropIfExists('post_images');
    }
};
