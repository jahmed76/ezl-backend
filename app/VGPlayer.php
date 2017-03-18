<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VGPlayer extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'password', 'player_id', 'shard', 'title_id', 
        'wins', 'played', 'played_ranked', 'loss_streak', 'win_streak',
        'level', 'life_time_gold', 'xp', 'ezl_username', 'ezl_email', 'last_updated',
    ];



}
