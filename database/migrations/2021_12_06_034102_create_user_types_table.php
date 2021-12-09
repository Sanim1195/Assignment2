<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTypesTable extends Migration
{
    //Creatng the framework for our user_types table 
    public function up()
    {
        Schema::create('user_types', function (Blueprint $table) {
            $table->id();
            $table->string('userTypeName');
            $table->string('userTypeDiscription');
            $table->timestamps();
        
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('user_types');
    }
}
