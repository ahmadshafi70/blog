<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo="/home";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {        
        // if(Auth::check() && Auth::user()->role_id==1) {
        //    $this->redirectTo=route('admin.dashboard');        
        // }
        // else if (Auth::check() && Auth::user()->role_id==2) {
        //      $this->redirectTo=route('admin.dashboard');
        // }
        // $this->middleware('guest')->except('logout');
    }
    protected function authenticated(Request $request, $user)
        {   
            if ($user->role_id==1) {
                return redirect()->route('admin.dashboard');
            }
            else if($user->role_id==2) {
                return redirect()->route('user.dashboard');
            }
            else{
                
            }
        }
    public function logout(Request $request) {
         Auth::logout();
         return redirect('/login');
        }
}
