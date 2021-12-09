<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    //Creatng the framework for our order_items table with referential integrity
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orderId')->constrained('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('foodId')->constrained('foods')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
