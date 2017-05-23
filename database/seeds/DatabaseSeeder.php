<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	protected $tables = [ 'users', 'cars', 'categories'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->cleanDatabase();
         $this->call(UsersTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(CarsTableSeeder::class);
    }

    public function cleanDatabase()
{
    DB::statement('SET FOREIGN_KEY_CHECKS=0');
    foreach ($this->tables as $table) {
        DB::table($table)->truncate();
    }
    DB::statement('SET FOREIGN_KEY_CHECKS=1');
}
}
