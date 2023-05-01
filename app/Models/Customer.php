<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	use HasFactory;

	protected $fillable = [
		'user_id',
		'name',
		'address',
		'phone',
		'website_url',
		'customer_contract',
		'customer_questionnaire',
		'partner_questionnaire',
		'region_classification_id',
		'partner_classification',
	];

	public function regionName()
    {
        return $this->hasOne("App\Models\RegionClassification", "id", "region_classification_id");
    }
}
