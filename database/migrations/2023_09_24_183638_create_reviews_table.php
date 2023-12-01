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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID as the primary key
            $table->unsignedBigInteger('user_id'); // User who left the review
            $table->unsignedBigInteger('restaurant_id'); // Restaurant for which the review is left
            $table->text('review_text'); // Review text
            $table->unsignedTinyInteger('rating'); // Rating (e.g., 1 to 5)
            $table->timestamps(); // Created_at and updated_at timestamps

            // Define foreign keys
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
