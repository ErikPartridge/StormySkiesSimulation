<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirplanes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('airplanes', function($table){
            $table->increments('id');
            $table->integer('world_id')->unsigned();
            $table->string('registration', 7);
            $table->integer('engine')->unsigned();
            $table->integer('fin');
            $table->decimal('age');
            $table->boolean('leased');
            $table->decimal('a_check');
            $table->decimal('b_check');
            $table->decimal('c_check');
            $table->decimal('hours');
            $table->integer('type')->unsigned();
            $table->integer('location')->unsigned();
            $table->integer('cycles');
            $table->integer('owner')->unsigned();
            $table->timestamps();

            $table->foreign('type')->references('id')->on('aircraft_types');
            $table->foreign('location')->references('id')->on('airports');
            $table->foreign('owner')->references('id')->on('airlines');
            $table->foreign('world_id')->references('id')->on('worlds');
            $table->foreign('engine')->references('id')->on('engines');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('airplanes');
	}

}
