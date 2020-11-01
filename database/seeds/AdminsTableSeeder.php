<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('admins')->insert([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'phone' => '01723556677',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('11111111')
        ]);
    }
}
