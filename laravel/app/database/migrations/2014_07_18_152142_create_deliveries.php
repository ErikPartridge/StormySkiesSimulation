<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveries extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world_one')->create('deliveries', function($table){
            $table->increments('id');
            $table->string('airline')->references('icao')->on('airlines');
            $table->string('manufacturer');
            $table->string('aircraft_type')->references('icao')->on('aircraft_types');
            $table->date('when');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world_one')->drop('deliveries');
	}

}
