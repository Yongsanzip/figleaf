<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

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
    public function __construct() {

        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        error_log("access");
        $credentials = request(['email', 'password']);
        var_dump($credentials);
        if (!Auth::attempt($credentials)) {
            flash()->overlay("이메일 또는 비밀번호가 잘못되었습니다",'로그인 불가')->error();
            return back();
        }
        error_log(auth()->user()->id);
        if(auth()->user()->role_id == 3){
            $forward = '/admin';
            flash(auth()->user()->name . ' 님 환영합니다.')->important();
        }
        else if(auth()->user()->role_id == 3){
            $forward = '/';
            flash(auth()->user()->name . ' 님 환영합니다.')->important();
        } else {
            Auth::logout();
            $forward = '/';
        }

        return redirect($forward);
    }
}
