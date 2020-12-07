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
            [   'name'=>'Elon Musk',
                'email'=>'musk@gmail.com',
                'password'=> Hash::make('musk123'),
                'role'=>'user'
            ],
            [   'name'=>'Administrator',
                'email'=>'admin@gmail.com',
                'password'=> Hash::make('admin123'),
                'role'=>'admin'
            ]
            ]);
    }
}
