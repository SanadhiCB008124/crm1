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

        Schema::create('re_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->onDelete('cascade');
            $table->unsignedBigInteger('original_order_id')->onDelete('cascade');
            $table->unsignedBigInteger('new_order_id')->onDelete('cascade');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('original_order_id')->references('id')->on('orders');
            $table->foreign('new_order_id')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('re_orders');
    }
};
