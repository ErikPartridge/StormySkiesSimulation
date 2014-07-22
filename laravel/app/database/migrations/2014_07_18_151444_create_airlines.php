<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirlines extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world_one')->create('airlines', function($table){
            $table->increments('id');
            $table->integer('reputation');
            $table->string('icao');
            $table->string('iata');
            $table->decimal('flight_attendant_pay');
            $table->decimal('mechanic_pay');
            $table->decimal('pilot_pay');
            $table->decimal('executive_pay');
            $table->string('headquarters')->references('icao')->on('airports');
            $table->string('country')->references('iso')->on('countries');
            $table->decimal('costs');
            $table->decimal('earnings');
            $table->decimal('profits');
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
		Schema::connection('world_one')->drop('airlines');
    }

}
