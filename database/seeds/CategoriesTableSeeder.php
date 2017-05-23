<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['sold', 'upcoming', 'available'];

        foreach ($categories as $category) 
        {
        	factory(App\Category::class)->create([
        		'name' => $category
        	]);
        }
    }
}
