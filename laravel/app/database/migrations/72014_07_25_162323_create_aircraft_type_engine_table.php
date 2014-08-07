<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAircraftTypeEngineTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aircraft_type_engine', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('aircraft_type_id')->unsigned()->index();
			$table->foreign('aircraft_type_id')->references('id')->on('aircraft_types')->onDelete('cascade');
			$table->integer('engine_id')->unsigned()->index();
			$table->foreign('engine_id')->references('id')->on('engines')->onDelete('cascade');
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
		Schema::drop('aircraft_type_engine');
	}

}
