<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		AircraftType::unguard();
		$this->call('AircraftTypeSeeder');
		AircraftType::reguard();
		Eloquent::reguard();
	}

}
