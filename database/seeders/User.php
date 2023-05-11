<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class User extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    	DB::table('users')->insert([
    		'name' =>'Admin',
    		'email'=>'admin@gmail.com',
    		'password' => Hash::make('123456'),
    		'role_id' => 1,
    		'publication_status' =>1
    	]);
    	DB::table('users')->insert([
    		'name' =>'HR',
    		'email'=>'hr@gmail.com',
    		'password' => Hash::make('123456'),
    		'role_id' => 2,
    		'publication_status' =>1
    	]);
    	DB::table('users')->insert([
    		'name' =>'EM',
    		'email'=>'em@gmail.com',
    		'password' => Hash::make('123456'),
    		'role_id' => 3,
    		'publication_status' =>1
    	]);
    	DB::table('users')->insert([
    		'name' =>'Employee',
    		'email'=>'employee@gmail.com',
    		'password' => Hash::make('123456'),
    		'role_id' => 4,
    		'publication_status' =>1
    	]);

    }
}
