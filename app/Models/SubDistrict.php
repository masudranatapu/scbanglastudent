<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubDistrict extends Model
{
    //
    protected $fillable = [
        'division_id',
        'district_id',
        'name',
        'slug',
    ];
    
}
