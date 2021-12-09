<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    //Creatng the framework for our foods table.
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('foodName');
            $table->float('foodPrice');
            $table->string('foodCategory',200);
            $table->longText('foodDescription');
            $table->boolean('discountStatus')->default(0);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
