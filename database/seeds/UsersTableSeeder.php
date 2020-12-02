<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; 

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [   'name'=>'Patrick Tjuatja',
                'email'=>'patricktjuatja@yahoo.com',
                'password'=> Hash::make('1234567')
            ]
            ]);
    }
}
