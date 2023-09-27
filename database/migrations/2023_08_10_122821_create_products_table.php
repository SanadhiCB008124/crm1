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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('detail');
            $table->float('unit_price');
            $table->string('slug')->unique();
            $table->integer('stocks');
            $table->string('image')->nullable();
            $table->integer('views')->nullable();

            $table->foreignId('size_id')->default(1)->constrained('sizes')->onDelete('cascade');
            $table->foreignId('color_id')->default(1)->constrained('colors')->onDelete('cascade')->default(1);
            $table->timestamps();

            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
