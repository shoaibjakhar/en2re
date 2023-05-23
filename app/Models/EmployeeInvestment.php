<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeInvestment extends Model
{
    use HasFactory;
    protected $table ='employee_investment';
    public $timestamps = false;
    protected $fillable = [
    	'id', 
    	'project_id', 
    	'employee_id', 
    	'investment_amount', 
    	'payment_id',
    ];

    public function project()
    {
        return $this->hasOne("App\Models\Project", "id","project_id");
    }
    public function employee()
    {
        return $this->hasOne("App\Models\User", "id","employee_id");
    }
}
