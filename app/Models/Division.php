<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $fillable = [
        'division_name',
        'division_slug',
        'cover_photo',
        'logo',
    ];
}
