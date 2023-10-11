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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID as the primary key
            $table->unsignedBigInteger('user_id'); // Foreign key for the user
            $table->string('name'); // Restaurant name
            $table->string('image1')->nullable(); // Image 1 (nullable)
            $table->string('image2')->nullable(); // Image 2 (nullable)
            $table->string('image3')->nullable(); // Image 3 (nullable)
            $table->string('image4')->nullable(); // Image 4 (nullable)
            $table->time('opening_hours_from'); // Opening hours
            $table->time('opening_hours_to'); // Opening hours
            $table->string('location'); // Restaurant location
            $table->text('description'); // Restaurant description
            $table->float('discount_percentage')->nullable(); // Discount percentage (nullable)
            $table->string('dishes_type'); // Dishes type (e.g., 'Italian', 'Mexican', 'Japanese')
            // Add other relevant fields as needed
            $table->timestamps(); // Created_at and updated_at timestamps

            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
