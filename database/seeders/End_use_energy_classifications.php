<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class End_use_energy_classifications extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('end_use_energy_classifications')->insert([
    		'name' =>'Electricity'
    	]);
    	DB::table('end_use_energy_classifications')->insert([
    		'name' =>'Heating'
    	]);
    	DB::table('end_use_energy_classifications')->insert([
    		'name' =>'Cooling'
    	]);
    	DB::table('end_use_energy_classifications')->insert([
    		'name' =>'Steam'
    	]);
    	DB::table('end_use_energy_classifications')->insert([
    		'name' =>'Mobility'
    	]);
    	DB::table('end_use_energy_classifications')->insert([
    		'name' =>'Hydrogen'
    	]);
    	DB::table('end_use_energy_classifications')->insert([
    		'name' =>'Others'
    	]);
    }
}
