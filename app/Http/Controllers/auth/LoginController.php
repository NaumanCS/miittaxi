<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function __construct(){
        $this->middleware('guest')->except('logout');
     }

     public function login(Request $request){
        $credentials = ['email', $request->email, 'password'=>$request->password, 'role'=>'admin'];
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->back()->withErrors("You have entered an invalid email/password, Please try again");
        }
     }
}
