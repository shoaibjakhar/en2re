<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionClassification extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table ='region_classifications';
    protected $fillale = [
    	'id',
    	'name',
    ];
}
