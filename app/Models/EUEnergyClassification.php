<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EUEnergyClassification extends Model
{
    use HasFactory;
    protected $table ='end_use_energy_classifications';
    protected $fillale = [
    	'id',
    	'name',
    ];
}
