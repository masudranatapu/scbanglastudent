<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    public function division()
    {
        return $this->belongsTo('App\Models\Division');
    }
    public function institute()
    {
        return $this->hasMany('App\Models\Institute','id','education_board_id');
    }
}
