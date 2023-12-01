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
        Schema::create('menus', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID as the primary key
            $table->unsignedBigInteger('restaurant_id'); // Restaurant to which the menu item belongs
            $table->string('name'); // Menu item name
            $table->string('image')->nullable(); // Image file path (nullable)
            $table->text('description')->nullable(); // Menu item description (nullable)
            $table->decimal('price', 8, 2); // Menu item price (8 digits with 2 decimal places)
            $table->string('type'); // Type of menu item (e.g., breakfast, lunch, dinner)

            $table->timestamps(); // Created_at and updated_at timestamps

            // Define foreign key relationship
            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
