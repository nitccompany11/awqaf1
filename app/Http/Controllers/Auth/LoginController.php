<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


use App\Models\User;

use Auth;

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

    use AuthenticatesUsers {
        logout as performLogout;
    }

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
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // After Login Refirect To Admin
    public function authenticated()
    {
        if(auth()->user()->admin == 3)
        {
            return redirect('/admin');

        }

        return redirect('/');
    }

    // After LogOut Redirect To Login
    public function logout(Request $request)
    {
        $this->performLogout($request);
        // Auth::logout();
        return redirect()->route('login');
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    // protected function attemptLogin($request)
    // {   
    //     //Try with email AND username fields
    //     if (Auth::attempt( [ 'phone' => $request['email'], 'password' => $request['password']], $request->has('remember') ) || Auth::attempt( ['email' => $request['email'],'password' => $request['password']], $request->has('remember')) ){
    //             return true;
    //     }
    //     return false;
    // }
}
