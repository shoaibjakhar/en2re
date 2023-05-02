<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	use HasFactory;
	protected $fillable = [
		'name',
		'type', 
		'attribute',
		'launch_date',
		'investment_amount',
		'currency_id',
		'detail', 
		'ghg_reduction_classification', 
		'end_use_energy_classification',
		'picture',
		'api_url',
		'invoice_epc', 
		'sign_off', 
		'webcam_url', 
		'status',
		'remarks',
		'latitude',
		'longitude', 
	];
	public function currency()
    {
        return $this->hasOne("App\Models\Currency", "id","currency_id");
    }

    public function projectImage()
    {
        return $this->hasOne("App\Models\ProjectImage", "project_id","id");
    }

    public function investment()
    {
        return $this->hasOne("App\Models\EmployeeInvestment", "project_id","id");
    }
}
