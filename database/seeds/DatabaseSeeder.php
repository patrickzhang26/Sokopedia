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
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
<<<<<<< HEAD
        // $this->call(AdminsTableSeeder::class);
=======
>>>>>>> 37b4254f4b350835cd5069b9f5e96eb66df3dbf1
    }
}
