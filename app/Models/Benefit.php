<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
    	'name', 
    	'details', 
    	'score_1_start', 
    	'score_2_start', 
    	'score_3_start', 
    	'score_4_start', 
    	'score_5_start',
    ];
}
