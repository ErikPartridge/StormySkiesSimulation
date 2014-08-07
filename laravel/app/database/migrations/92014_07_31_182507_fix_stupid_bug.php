<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixStupidBug extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('airlines', function(Blueprint $table){
			$table->integer('ceo')->unsigned();
			$table->foreign('ceo')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('airlines', function(Blueprint $table){
			$table->dropColumn('ceo');
		});
	}

}
