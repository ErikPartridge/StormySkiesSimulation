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
            $table->integer('world_id');
            $table->string('pays');
            $table->string('to');
            $table->decimal('amount');
            $table->date('when');
            $table->timestamps();

            $table->foreign('pays')->references('icao')->on('airlines');
            $table->foreign('to')->references('icao')->on('airlines');
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
		Schema::drop('bills');
	}

}
