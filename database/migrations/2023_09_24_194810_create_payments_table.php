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
        Schema::create('payments', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID as the primary key
            $table->unsignedBigInteger('reservation_id'); // Reservation to which the payment is related
            $table->unsignedBigInteger('user_id'); // User who initiated the payment
            $table->decimal('amount', 10, 2); // Transaction amount (10 digits with 2 decimal places)
            $table->string('payment_method'); // Payment method (e.g., 'credit_card', 'paypal')
            $table->timestamp('transaction_timestamp'); // Timestamp of the payment transaction
            // $table->string('status'); // Payment status (e.g., 'pending', 'completed', 'failed')
            // $table->string('transaction_id')->unique(); // Unique transaction identifier
            // $table->timestamps(); // Created_at and updated_at timestamps

            // Define foreign key relationships
            $table->foreign('reservation_id')->references('id')->on('reservations');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
