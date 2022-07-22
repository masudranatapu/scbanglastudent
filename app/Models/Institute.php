<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    public function institute_type()
    {
        return $this->belongsTo('App\Models\InstituteType');
    }

     public function sub_institute_type()
    {
        return $this->belongsTo('App\Models\SubInstituteType');
    }

    public function division()
    {
        return $this->belongsTo('App\Models\Division');
    }
    public function district()
    {
        return $this->belongsTo('App\Models\District');
    }
    public function post()
    {
        return $this->hasMany('App\Models\Post');
    }
    public function board()
    {
        return $this->belongsTo('App\Models\Board','education_board_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
