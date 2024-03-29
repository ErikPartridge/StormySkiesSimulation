<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table){
           $table->increments('id');
           $table->string('username', 20)->unique();
           $table->string('first_name', 20);
           $table->string('last_name', 255);
           $table->string('email', 255)->unique();
           $table->string('location', 255);
           $table->date('birthday');
           $table->string('password', 60);
           $table->string('password_temp', 60);
           $table->boolean('active');
           $table->boolean('admin');
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
		Schema::drop('users');
	}

}
