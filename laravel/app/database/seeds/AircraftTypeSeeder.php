<?PHP

class AircraftTypeSeeder extends Seeder {

    public function run()
    {
        AircraftType::create(array('name'=>'Airbus A320-200', 'icao' => "A320", 'cruise_speed' => "511", 'minimum_runway' => '6860',
        	'range' => '3600', 'price' => '93900000', 'number_of_engines'=> '2', 'max_seats' => '180', 'production_rate' => '12', 'manufacturer' => 'Airbus',
        	'fuelburn' => '5280', 'mtow' => '172000', 'mlw' => '146000', 'mzfw' => '137800', 'oew' => '93900', 'price_a' => '7000', 'price_b' => '32000', 'price_c' => '1000000',
        	'hours_a' => '50', 'hours_b' => '120', 'hours_c' => '5000'));
    }


}

?>