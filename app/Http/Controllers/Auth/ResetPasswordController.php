<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ResetPassword;
use App\PasswordReset;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    /************************************************************************
     * Verified register user
     * @description : 이메일 인증 - 이메일 인증 액션
     * @url         : /verified_email
     * @method      : get
     * @return      : view
     ************************************************************************/
    public function send_reset_email(Request $request){
        try {
            $email = $request->email;                                                                                   // 전달받은 이메일
            $user = User::whereEmail($email)->first();                                                                  // 전달받은 이메일로 사용자 찾기
            if(isset($user->email)){

                $token = Str::random(60);                                                                        // 임의의 토큰 발생
                PasswordReset::create(['email'=>$email,'token'=>$token,'created_at'=>Carbon::today()]);                 // PasswordReset 테이블에 데이터 생성
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
     * Verified register user
     * @description : 이메일 인증 - 이메일 인증 액션
     * @url         : /verified_email
     * @method      : get
     * @return      : view
     ************************************************************************/
    public function get_reset_token(Request $request){

    }
}
