<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerContactInfo extends Model
{
	use HasFactory;
	protected $table = 'customers_point_of_contacts';
	public $timestamps = false;
	protected $fillable =[
		'user_id',
		'name', 
		'email',
		'role',
		'phone',
		'role',
		
	];
}
