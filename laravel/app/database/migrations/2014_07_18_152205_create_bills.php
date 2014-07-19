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
		Schema::create('bills', function($table){
            $table->increments('id');
            $table->foreign('pays')->references('icao')->on('airlines');
            $table->foreign('to')->references('icao')->on('airlines');
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
		Schema::drop('bills');
	}

}
