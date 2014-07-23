<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlots extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('slots', function($table){
            $table->increments('id');
            $table->integer('world_id')->unsigned();
            $table->integer('time');
            $table->integer('airport')->unsigned();
            $table->integer('owner')->unsigned();
            $table->timestamps();

            $table->foreign('airport')->references('id')->on('airports');
            $table->foreign('owner')->references('id')->on('airlines');
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
		Schema::drop('slots');
	}

}
