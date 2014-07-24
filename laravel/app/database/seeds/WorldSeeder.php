<?PHP

class WorldSeeder extends Seeder {

    public function run()
    {
        library\World::create(array('name'=>'Logan', 'number_users' => 143, 'cap' => 210));
    }


}

?>