<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Auth\GenericUser;

class FantasyController extends Controller
{
    //

    public function AddRoom($options = 0){
        if($options !== 0){

        } else {
            DB::table('fantasy_rooms')->insert(
                [
                    'room_name' => 'TestRoom',
                    // 'owner' => \Auth::user()->id,
                    'ruleset' => DB::table('fantasy_rulesets')
                                            ->where('title', 'Default')
                                            ->value('rules'),
                    'members' => json_encode(array())
                    
                ]);
        }


    }


}
