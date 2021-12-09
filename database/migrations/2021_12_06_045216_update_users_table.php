<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
   //A function to update the already created Users table from the first migration which is automatic.
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('lastName');
            $table->foreignId('userTypeId')->constrained('user_types')->onDelete('cascade')->onUpdate('cascade');
            $table->string('address');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('lastName');
            $table->dropColumn('userTypeId');
            $table->dropColumn('address');
            

        });
    }
}
