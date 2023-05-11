<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Region_classifications extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('region_classifications')->insert([
    		'name' =>'EMEA'
    	]);
    	DB::table('region_classifications')->insert([
    		'name' =>'AMERICAS'
    	]);
    	DB::table('region_classifications')->insert([
    		'name' =>'ASEAN'
    	]);
    }
}
