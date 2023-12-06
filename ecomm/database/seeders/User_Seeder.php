<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //make direct entry in database
        DB::table('users')->insert([
            'name'=>'akash',
            'email'=>'ak.test',
            'password'=>Hash::make('Akash')
        ]);
    }
}
