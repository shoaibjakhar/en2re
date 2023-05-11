<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class Role extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    	DB::table('roles')->insert([
    		'role_id' =>'1',
    		'role_name'=>'Admin',
    		'description' =>NULL
    	]);
    	DB::table('roles')->insert([
    		'role_id' =>'2',
    		'role_name' =>'HR',
    		'description' =>NULL
    	]);
    	DB::table('roles')->insert([
    		'role_id' =>'3',
    		'role_name' =>'Energy Manager',
    		'description' =>NULL
    	]);
    	DB::table('roles')->insert([
    		'role_id' =>'4',
    		'role_name' =>'Employee',
    		'description' =>NULL
    	]);
    	DB::table('roles')->insert([
    		'role_id' =>'5',
    		'role_name' =>'Customer',
    		'description' =>NULL
    	]);
    }
}
