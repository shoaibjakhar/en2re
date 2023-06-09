<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emission extends Model
{
    use HasFactory;
    	protected $fillable = [
		'name',
		'api_implemented',
		'amount_confirm', 
		'tested_date',
	];
}
