<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBills extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world_one')->create('bills', function($table){
            $table->increments('id');
            $table->string('pays')->references('icao')->on('airlines');
            $table->string('to')->references('icao')->on('airlines');
            $table->decimal('amount');
            $table->date('when');
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
		Schema::connection('world_one')->drop('bills');
	}

}
