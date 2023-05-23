<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	use HasFactory;
	public $timestamps = false;
	protected $fillable = [
		'name',
		'customer_id',
        'ideation_id',
		'type', 
		'attribute',
		'launch_date',
		'investment_amount',
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
    public function projectImage()
    {
        return $this->hasOne("App\Models\ProjectImage", "project_id","id");
    }

    public function investment()
    {
        return $this->hasOne("App\Models\EmployeeInvestment", "project_id","id");
    }
    public function customer()
    {
        return $this->hasOne("App\Models\Customer", "id","customer_id");
    }
    public function ideation()
    {
        return $this->hasOne("App\Models\Ideation", "id","ideation_id");
    }
}
