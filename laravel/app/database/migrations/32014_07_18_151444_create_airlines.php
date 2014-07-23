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
		Schema::create('airlines', function($table){
            $table->increments('id');
            $table->integer('world_id')->unsigned();
            $table->integer('reputation');
            $table->string('icao', 3);
            $table->string('iata', 2);
            $table->decimal('flight_attendant_pay');
            $table->decimal('mechanic_pay');
            $table->decimal('pilot_pay');
            $table->decimal('executive_pay');
            $table->integer('headquarters');
            $table->integer('country');
            $table->decimal('costs');
            $table->decimal('earnings');
            $table->decimal('profits');
            $table->timestamps();

            #foreign
            $table->foreign('world_id')->references('id')->on('worlds');
            $table->foreign('headquarters')->references('id')->on('airports');
            $table->foreign('country')->references('id')->on('countries');

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
