<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = [
        'division_id',
        'district_name',
        'district_slug',
        'cover_photo',
    ];

    public function division()
    {
       return $this->belongsTo('App\Models\Division');
    }
}
