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
            $table->integer('world_id')->unsigned();
            $table->string('flight_number', 7);
            $table->integer('depart')->unsigned();
            $table->integer('arrive')->unsigned();
            $table->integer('aircraft_type')->unsigned();
            $table->integer('airline')->unsigned();
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
            #foreign
            $table->foreign('world_id')->references('id')->on('worlds');
            $table->foreign('depart')->references('id')->on('airports');
            $table->foreign('arrive')->references('id')->on('airports');
            $table->foreign('aircraft_type')->references('id')->on('aircraft_types');
            $table->foreign('airline')->references('id')->on('airlines');
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
