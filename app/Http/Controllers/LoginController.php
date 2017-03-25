<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\Traits\AuthenticatesUsersEZL;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Symfony\Component\Console\Output\ConsoleOutput;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsersEZL;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
      protected $redirectTo = '/'; //<=== Default
    //protected $redirectTo = '#';
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    protected function authenticated(Request $request, $user)
    {
        //
        parent::authenticated($request, $user);

        $console = new ConsoleOutput();
        $console->writeln("Called by authenticated");
        
        // if(Auth::check()){
        //     return response()->json(array(
        //         'data' => 'Yay!',
        //     ));

            
        //}
        
    }

    // protected function sendLoginResponse(Request $request)
    // {
    //     $request->session()->regenerate();

    //     $this->clearLoginAttempts($request);

    //      return response()->json([
    //         'data' => Auth::user(),
    //     ]);
    // }
    

}
