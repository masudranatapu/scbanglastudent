<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
   protected $fillable = [
        'class_name',
        'class_slug',
    ];
}
