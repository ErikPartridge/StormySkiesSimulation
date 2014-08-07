<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAirportDepartTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('airport_depart', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('airport_id')->unsigned()->index();
			$table->foreign('airport_id')->references('id')->on('airports');
			$table->integer('depart_id')->unsigned()->index();
			$table->foreign('depart_id')->references('id')->on('routes');
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
		Schema::drop('airport_depart');
	}

}
