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
		Schema:create('airlines', function($table){
            $table->increments('id');
            $table->integer('reputation');
            $table->string('icao');
            $table->string('iata');
            $table->decimal('flight_attendant_pay');
            $table->decimal('mechanic_pay');
            $table->decimal('pilot_pay');
            $table->decimal('executive_pay');
            $table->string('ceo')->references('user_name')->on('users');
            $table->string('headquarters')->references('icao')->on('airports');
            $table->string('country')->references('iso')->on('countries');
            
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('airlines');
    }

}
