<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Auth\Registered;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Foundation\Auth\RegistersUsers;
use Symfony\Component\Console\Output\ConsoleOutput;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Auth\RegistersUsersEZL;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsersEZL;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = '/home'; //<=== Default
    //protected $redirectTo = '#';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }



    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    // public function register(Request $request)
    // {
    //     //if($request)

    //     $this->validator($request->all())->validate();

    //     event(new Registered($user = $this->create($request->all())));

    //     $this->guard()->login($user);

    //     return response()->json(array(
    //         'data' => 'yay'
    //     ));
        
        
    //     //$this->registered($request, $user);
    //                     //?: redirect($this->redirectPath());
    // }

    // /**
    //  * The user has been registered.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  mixed  $user
    //  * @return mixed
    //  */
    // protected function registered(Request $request, $user)
    // {
    //     //
    //     return response()->json(array(
    //         'data' => 'yay'
    //     ));
    // }


    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function register(Request $request)
    // {
    //     $this->validator($request->all())->validate();

    //     event(new Registered($user = $this->create($request->all())));

    //     $this->guard()->login($user);

    //     return response()->json(array(
    //         'data' => 'yay'
    //     ));

    
        
        
        //$this->registered($request, $user);
                        //?: redirect($this->redirectPath());
    //}

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    // protected function registered(Request $request, $user)
    // {
    //     //
    //     //return response(json([]))
        
        
    //     return response()->json([
    //         'data' => 'Hello!',
    //     ], 200, [
    //         'Content-Type' => 'application/json',
    //     ]);
        
        
    //     // ->json([
    //     //     'data' => 'yay',
    //     // ]);

        

    // }

    // protected function register(Request $request){

    //     //if($request->json)

    //     $func = new RegistersUsersEZL();
    //     $func->register($request);

    //     $this->registered($request, 
    //     Auth::user());
    // }


}
