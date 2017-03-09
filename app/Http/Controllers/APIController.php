<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class APIController extends Controller
{
    //
    public function UserIndex(){
        $users = DB::table('users')->get();

        //return view('user.index', ['users' => $users]);
        return response()->json($users);
    }

    public function GetProTeamRosters(){
        $headers = [
             'Access-Control-Allow-Origin' => '*',
         'Access-Control-Allow-Methods'=> 'POST, GET, OPTIONS, PUT, DELETE',
         'Access-Control-Allow-Headers'=> 'Content-Type, X-Auth-Token, Origin'
        ];
        $response = DB::table('pro_teams')->get();

        //return response()->json($response);

        return Response::make('OK', 200, $headers)->json($response);
    }

}
