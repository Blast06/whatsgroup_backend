<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(TagsTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(CountriesTableSeeder::class);
        $this->call(TypesTableSeeder::class);
         $this->call(GroupsTableSeeder::class);

    }
}
