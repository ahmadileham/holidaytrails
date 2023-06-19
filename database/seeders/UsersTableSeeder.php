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
                'about'=>'am the GOAT'
            ],

            [
                'name'=>'umar',
                'email'=>'umar@icloud.com',
                'password'=>Hash::make('123'),
                'about'=>'ganu kite'
            ],

            [
                'name'=>'wan',
                'email'=>'wan@icloud.com',
                'password'=>Hash::make('111'),
                'about'=>'saya sado'
            ],

            [
                'name'=>'bo',
                'email'=>'bo@icloud.com',
                'password'=>Hash::make('111'),
                'about'=>'bonen'
                // 'photo'=>'https://via.placeholder.com/60x60.png/00aa33?text=ducimus'
            ], 
        ]);
    }
}
