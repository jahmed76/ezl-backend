<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProPlayer extends Model
{
    //
    protected $fillable = [
        'name',
        'shadId',
        'team',
        'position',
    ];

    public $timestamps = false;
}
