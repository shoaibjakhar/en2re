<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	use HasFactory;
	protected $fillable =[
		'id',
		'name', 
		'header',
		'launch_date', 
		'campaign_message',
		'description',
	];


    public function blogImages()
    {
        return $this->hasOne("App\Models\BlogImage","blog_id","id");
    }
}
