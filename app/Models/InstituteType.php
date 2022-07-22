<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstituteType extends Model
{
    protected $fillable = [
        'institute_type',
        'slug',
    ];

    public function sub_institute_type()
    {
        return $this->hasMany('App\Models\SubInstituteType');
    }
}
