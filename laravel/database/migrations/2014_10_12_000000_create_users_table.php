<?php

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
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
			$table->string('signup_ip', 255);
			$table->string('login_ip', 255);
			$table->tinyInteger('rank')->unsigned();
			$table->tinyInteger('faction')->unsigned();
			$table->bigInteger('lumber')->unsigned();
			$table->bigInteger('stone')->unsigned();
			$table->bigInteger('food')->unsigned();
			$table->bigInteger('silver')->unsigned();
			$table->integer('gold')->unsigned();
			$table->boolean('newuser');
			$table->boolean('premium');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
