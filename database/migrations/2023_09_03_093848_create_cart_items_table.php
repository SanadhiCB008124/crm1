<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartItemsTable extends Migration
{
public function up()
{
Schema::create('cart_items', function (Blueprint $table) {
$table->id();
$table->unsignedBigInteger('user_id');
$table->string('product_slug');
$table->integer('quantity');
$table->timestamps();

// Define foreign key constraints
$table->foreign('user_id')
->references('id')
->on('users')
->onDelete('cascade'); // Delete cart items when a user is deleted

$table->foreign('product_slug')
->references('slug')
->on('products')
->onDelete('cascade'); // Delete cart items when a product is deleted
});
}

public function down()
{
Schema::dropIfExists('cart_items');
}
}
