<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            ['name'=>'Admin',
            'email'=>'admin@yahoo.com',
            'password'=> 'admin123'],
            ['name'=>'Administrator',
            'email'=>'administrator@example.com',
            'password'=> 'example']
        ]);
    }
}
