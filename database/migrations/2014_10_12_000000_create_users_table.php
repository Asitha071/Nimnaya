<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('usertype');
            $table->string('name');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('verifyToken');
             $table->boolean('status');
              $table->string('avatar')->default('default.jpg');
            $table->date('dob');
            $table->string('school');
            $table->string('phone');
            $table->string('gender');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
