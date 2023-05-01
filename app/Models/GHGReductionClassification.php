<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GHGReductionClassification extends Model
{
    use HasFactory;
    protected $table ='ghg_reduction_classifications';
    protected $fillale = [
    	'id',
    	'name',
    ];
}
