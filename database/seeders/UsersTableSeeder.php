<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'=>'Shazwy',
                'email'=>'wywy@icloud.com',
                'password'=>Hash::make('111'),
            ],

            [
                'name'=>'umar',
                'email'=>'umar@icloud.com',
                'password'=>Hash::make('123'),
            ],

            [
                'name'=>'wan',
                'email'=>'wan@icloud.com',
                'password'=>Hash::make('111'),
            ],

            [
                'name'=>'bo',
                'email'=>'bo@icloud.com',
                'password'=>Hash::make('111'),
            ], 
        ]);
    }
}
