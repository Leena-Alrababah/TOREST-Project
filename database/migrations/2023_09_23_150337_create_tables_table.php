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
        Schema::create('tables', function (Blueprint $table) {
            
                $table->id(); // Auto-incrementing ID as the primary key
                $table->unsignedBigInteger('restaurant_id'); // Restaurant to which the table belongs
                $table->string('name'); // Table name or identifier
                $table->integer('capacity'); // Seating capacity of the table
                $table->string('status')->default('available'); 
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
        Schema::dropIfExists('tables');
    }
};
