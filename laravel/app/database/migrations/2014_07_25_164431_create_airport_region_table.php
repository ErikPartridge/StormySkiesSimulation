<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAirportRegionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('airport_region', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('airport_id')->unsigned()->index();
			$table->foreign('airport_id')->references('id')->on('airports')->onDelete('cascade');
			$table->integer('region_id')->unsigned()->index();
			$table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
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
		Schema::drop('airport_region');
	}

}
