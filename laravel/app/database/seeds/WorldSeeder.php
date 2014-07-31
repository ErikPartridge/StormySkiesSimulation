<?PHP

class WorldSeeder extends Seeder {

    public function run()
    {
        World::create(array('name'=>'Logan', 'number_users' => 143, 'cap' => 210));
    }


}

?>