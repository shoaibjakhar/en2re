<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeInvestment extends Model
{
    use HasFactory;
    protected $table ='employee_investment';
    protected $fillable = [
    	'id', 
    	'project_id', 
    	'employee_id', 
    	'investment_amount', 
    	'currency_id',
    ];
    public function currency()
    {
        return $this->hasOne("App\Models\Currency", "id","currency_id");
    }
}
