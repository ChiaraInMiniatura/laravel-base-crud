<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comic extends Model
{
    protected $fillable = [
        'title',
        'image',
        'type',
    ];
}
