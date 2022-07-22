<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubInstituteType extends Model
{
    protected $fillable = [
        'institute_type_id',
        'sub_institute_type',
        'sub_institute_type_slug',
    ];

    public function institute_type()
    {
        return $this->belongsTo('App\Models\InstituteType');
    }
}
