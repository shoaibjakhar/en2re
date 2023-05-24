<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	use HasFactory;
	public $timestamps = false;
	protected $fillable =[
		'id',
		'name', 
		'header',
		'launch_date', 
		'campaign_message',
		'description',
		'customer_id',
	];


    public function blogImages()
    {
        return $this->hasOne("App\Models\BlogImage","blog_id","id");
    }
}
