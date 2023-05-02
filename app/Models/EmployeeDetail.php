<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDetail extends Model
{
    use HasFactory;
    protected $table ='employee_detail';
    protected $fillable = [
    	'id', 
    	'employee_id',
        'bank_name', 
    	'account_no', 
    	'bank_id',
    ];
}
