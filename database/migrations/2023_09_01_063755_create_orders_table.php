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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('customer_id')->constrained('users')->onDelete('cascade');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('order_number')->unique();
            $table->float('total_amount');
            $table->enum('status', ['pending', 'shipped', 'delivered'])->default('pending');
            $table->foreignId('payment_id')->constrained('payments')->onDelete('cascade');
            $table->string('payment_status')->default('payment pending');
            $table->string('notes');
            $table->string('billing_address');
            $table->string('shipping_address');
            $table->string('contact');
            $table->dateTime('date_of_order');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
