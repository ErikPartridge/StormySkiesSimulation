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
		Schema::create('deliveries', function($table){
            $table->increments('id');
            $table->integer('world_id')->unsigned();
            $table->integer('airline')->unsigned();
            $table->string('manufacturer');
            $table->integer('aircraft_type')->unsigned();
            $table->date('when');
            $table->timestamps();

            $table->foreign('airline')->references('id')->on('airlines');
            $table->foreign('aircraft_type')->references('id')->on('aircraft_types');
            $table->foreign('world_id')->references('id')->on('worlds');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('deliveries');
	}

}
