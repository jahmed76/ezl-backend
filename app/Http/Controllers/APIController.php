<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class APIController extends Controller
{
    //
    public function UserIndex(){
        $users = DB::table('users')->get();

        //return view('user.index', ['users' => $users]);
        return response()->json($users);
    }

    public function GetTeamRosters(){
        
    }

}
