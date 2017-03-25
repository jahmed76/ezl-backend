<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
//use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Auth\Traits\RegistersUsersEZL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Output\ConsoleOutput;

class AuthenticateController extends Controller
{

    public function EchoAuth(){
         return response()->json([
            'data' => Auth::user(),
        ]);
    }
    

}
