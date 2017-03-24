<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProTeam extends Model
{
    //
    protected $fillable = [
        'name',
        'shardId',
        'carry_starter',
        'carry_sub',
        'jungle_starter',
        'jungle_sub',
        'captain_starter',
        'captain_sub',
        'any_sub',
    ];

    public $timestamps = false;
}
