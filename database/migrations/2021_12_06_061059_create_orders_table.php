<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    //Creatng the framework for our orders table with referential integrity
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userId')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->date('orderDate');
            $table->integer('paymentId')->nullable();
            $table->timestamps();
        });
    }

    //The down function gets executed first and drops the table orders if exists inside the database.
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
