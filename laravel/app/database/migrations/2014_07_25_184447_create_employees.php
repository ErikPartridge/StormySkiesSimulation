<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployees extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employees', function(Blueprint $t){
			$t->increments('id');
			$t->integer('salary');
			$t->string('first_name');
			$t->string('last_name');
			$t->integer('age');
			$t->integer('employer')->unsigned();
			$t->string('type');

			$t->foreign('employer')->references('id')->on('airlines');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('employees');
	}

}
