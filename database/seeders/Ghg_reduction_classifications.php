<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Ghg_reduction_classifications extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    	DB::table('ghg_reduction_classifications')->insert([
    		'name' =>'Scope 1'
    	]);
    	DB::table('ghg_reduction_classifications')->insert([
    		'name' =>'Scope 2'
    	]);
    	DB::table('ghg_reduction_classifications')->insert([
    		'name' =>'Scope 3'
    	]);
    }
}
