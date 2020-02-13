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
        error_log($request->email);
        error_log($request->password);
        if(!auth()->attempt($request->only('email','password'), $request->has('remeber'))){
            flash("이메일 또는 비밀번호가 잘못되었습니다")->error();
            return back();
        }
        if(auth()->user()->role_id == 4){
            $forward = '/admin';
            flash(auth()->user()->name . ' 님 환영합니다.')->success();
        } else if(auth()->user()->role_id == 3){
            $forward = '/admin';
            flash(auth()->user()->name . ' 님 환영합니다.')->success();
        } else if(auth()->user()->role_id == 2) {
            $forward = '/';
            flash(auth()->user()->name . ' 님 환영합니다.')->success();
        } else if(auth()->user()->role_id == 1){
            $forward = '/';
            flash(auth()->user()->name . ' 님 환영합니다.')->success();
        } else {
            Auth::logout();
            $forward = '/';
        }

        return redirect($forward);
    }
}
