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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

        $this->middleware('guest')->except('logout');
    }

    /************************************************************************
     * Action to Login process
     * @description : 로그인 - 로그인 액션
     * @url         : /login
     * @method      : post
     * @return      : view
     ************************************************************************/
    public function login(Request $request){

        if(!auth()->attempt($request->only('email','password'), $request->has('remeber'))){                   // 로그인 (세션정보저장)
            flash("이메일 또는 비밀번호가 잘못되었습니다")->error();
            return back();
        }

        if(auth()->user()->email_verified_at ==null){                                                                    // 이메일 인증이 체크
            $email = auth()->user()->email;
            Auth::logout();
            $forward = '/login';
            flash($email . '의 계정이 인증되지 않았습니다. 메일함을 확인해주세요')->warning();
        } else {

            if(auth()->user()->role_id == 4){                                                                           // 최고 관리자일 경우
                $forward = '/admin';
                flash(auth()->user()->name . ' 님 환영합니다.')->success();
            } else if(auth()->user()->role_id == 3){                                                                    // 프로젝트허가자 일경우
                $forward = '/admin';
                flash(auth()->user()->name . ' 님 환영합니다.')->success();
            } else if(auth()->user()->role_id == 2) {                                                                   // 디자이너일 경우
                $forward = '/';
                flash(auth()->user()->name . ' 님 환영합니다.')->success();
            } else if(auth()->user()->role_id == 1){                                                                    // 일반 유저일경
                $forward = '/';
                flash(auth()->user()->name . ' 님 환영합니다.')->success();
            } else {
                Auth::logout();
                $forward = '/';
            }
        }

        return redirect($forward);
    }
}
