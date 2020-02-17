<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ResetPassword;
use App\PasswordReset;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /************************************************************************
     * Reset user password
     * @description : 비밀번호 변겅 - 변경 이메일 전송
     * @url         : /send_reset_email
     * @method      : get
     * @return      : view
     ************************************************************************/
    public function __construct() {
        $this->middleware('guest');
    }

    /************************************************************************
     * Reset user password
     * @description : 비밀번호 변겅 - 변경 이메일 전송
     * @url         : /send_reset_email
     * @method      : get
     * @return      : view
     ************************************************************************/
    public function send_reset_email(Request $request){
        try {
            $email = $request->email;                                                                                   // 전달받은 이메일
            $user = User::whereEmail($email)->first();                                                                  // 전달받은 이메일로 사용자 찾기
            if(isset($user->email)){

                $token = Str::random(60);                                                                        // 임의의 토큰 발생
                $reset = PasswordReset::create(['email'=>$email,'token'=>$token,'created_at'=>Carbon::now()]);          // PasswordReset 테이블에 데이터 생성
                $subject = '비밀번호 재설정';                                                                              // 보낼 메일 제목
                Mail::to($user->email)->send(new ResetPassword($user,$subject,$token));                                 // 사용자정보, 제목, token과 함께 메일전달
                return view('auth.passwords.send_reset_email');                                                    // 메일전송완료 폼
            } else {
                flash()->error('존재하지않는 이메일입니다.');
                return back();
            }
        } catch (\Exception $e){
            error_log($e->getMessage());
            flash('잘못된 접근입니다. 관리자에게 문의하여주세요. \n' . $e->getMessage())->error();
            return back();
        }
    }

    /************************************************************************
     * update reset password
     * @description : 비밀번호 변경 액션 - 비밀번호 액션
     * @url         : /password/reset
     * @method      : POST
     * @return      : view
     ************************************************************************/
    public function reset(Request $request){
        $reset = PasswordReset::whereEmail($request->email)->whereToken($request->token)->first();
        if($reset->created_at ? $reset->created_at < Carbon::now()->subMinute(-30) : false){
            $user = User::whereEmail($reset->email)->first();
            $this->resetPassword($user , $request->password);
        } else {
            flash('만료된 토큰입니다. 비밀번호 재설정메일을 재전송해주세요!');
            return redirect('/login');
        }

        if(Auth::check()){
            flash('비밀번호를 변경하였습니다.');
            return redirect('/');
        } else {
            flash('잘못된 접근입니다. 관리자에게 문의하여 주세요');
            return redirect('/');
        }

    }
}
