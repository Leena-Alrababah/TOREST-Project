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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID as the primary key
            $table->unsignedBigInteger('user_id'); // User who made the reservation
            $table->unsignedBigInteger('restaurant_id'); // Restaurant where the reservation is made
            $table->unsignedBigInteger('table_id'); // Table associated with the reservation
            $table->date('reservation_date'); // Date of the reservation
            $table->time('reservation_time'); // Time of the reservation
            // $table->unsignedInteger('number_of_guests'); // Number of guests
            $table->string('name')->nullable(); // Guest's name
            $table->string('email')->nullable(); // Guest's email
            $table->string('phone')->nullable(); // Guest's phone number
            $table->string('reservation_status'); // Reservation status (e.g., confirmed, pending)
            $table->timestamps(); // Created_at and updated_at timestamps

            // Define foreign key relationships
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
            $table->foreign('table_id')->references('id')->on('tables')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
