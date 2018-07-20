<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
    protected $redirectTo = '/home';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function authenticated($request , $user){
        if ($user->status == 0 && $user->user_type == 1) {
            Auth::logout();
            return redirect('/')->with('warning','Your account is not actived. Please check your email and active your account');
        }
        if($user->user_type=='2'){
            if ($user->status == 0)
                return redirect('/');
            return redirect()->route('writer.dashboard') ;
        }elseif($user->user_type=='1'){
            return redirect()->route('student.dashboard') ;
        }elseif($user->user_type == '102') {
            return redirect()->route('admin.dashboard') ;
        }
    }
    
    
}
