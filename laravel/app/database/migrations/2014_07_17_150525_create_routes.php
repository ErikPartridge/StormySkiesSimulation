<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('routes', function($table){
            $table->increments('id');
            $table->string('flight_number', 7);
            $table->foreign('departs')->references('icao')->on('airports');
            $table->foreign('arrives')->references('icao')->on('airports');
            $table->foreign('aircraft_type')->references('icao')->on('aircraft_types');
            $table->foreign('airline')->references('icao')->on('airlines');
            $table->double('on_time', 6, 2);
            $table->double('delayed', 6, 2);
            $table->double('cancelled', 6, 2);
            $table->decimal('biz');
            $table->decimal('first_price');
            $table->decimal('eco_price');
            $table->decimal('eco_plus_price');
            $table->decimal('revenue');
            $table->integer('flight_time');
            $table->time('departs_gmt');
            $table->date('started');
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
		Schema::drop('routes');
    }

}
