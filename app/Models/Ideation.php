<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ideation extends Model
{
	use HasFactory;

	protected $table = 'ideations';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'details',
		'type', 
		'attribute',
		'ghg_reduction_classification_id',
		'end_use_energy_classification_id', 
		'project_proposal',
		'feasibility_form',
		'business_case',
		'target_launch_date',
		'epc_responsibility_classification',

	];

	public function GHGReduction()
    {
        return $this->hasOne("App\Models\GHGReductionClassification", "id", "ghg_reduction_classification_id");
    }
    public function EUEnergy()
    {
        return $this->hasOne("App\Models\EUEnergyClassification", "id", "end_use_energy_classification_id");
    }
}
