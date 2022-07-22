<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function institute()
    {
        return $this->belongsTo('App\Models\Institute');
    }

    // Admin

    public function admin()
    {
        return $this->belongsTo('App\Models\Admin','approved_by','id');
    }

    public function class()
    {
        return $this->belongsTo('App\Models\Classes');
    }
    public function shift()
    {
        return $this->belongsTo('App\Models\Shift');
    }
    public function group()
    {
        return $this->belongsTo('App\Models\Group');
    }     
}
