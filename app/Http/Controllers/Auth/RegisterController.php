<?php

namespace App\Http\Controllers\Auth;

use App\Mail\VerifyMail;
use App\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;

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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /************************************************************************
     * Display register view
     * @description : 회원가입 - 회원가입 폼 view
     * @url         : /register
     * @method      : get
     * @return      : view
     ************************************************************************/
   protected function showRegistrationForm(Request $request){
       $sms_check = $request->session()->get('sms_check');                                                          // SMS 수신 체크
       $email_check = $request->session()->get('email_check');                                                      // 이메일 수신 체크
       $request->session()->forget('sms_check');                                                                   // SMS 세션 삭제
       $request->session()->forget('email_check');                                                                 // 이메일 세션 삭제
       return view('auth.register',compact('sms_check','email_check'));
   }

    /************************************************************************
     * Display register view
     * @description : 회원가입 - 회원가입 액션
     * @url         : /register
     * @method      : post
     * @return      : view
     ************************************************************************/
    protected function create(Request $request) {
        try {
            $subject ='가입인증메일';
            $check = User::whereEmail($request->email)->first();
            if(isset($check)){
                $mail = Mail::to($request->email)->send(new VerifyMail($check,$subject,$check->verified_token));
                flash('이미 존재하는 이메일입니다.')->important();
                return redirect('/');
            } else {
                $user = User::firstOrCreate([
                    'role_id'       => 1,                                                                                        //
                    'email'         => $request->email,                                                                          //
                    'password'      => bcrypt($request->password),                                                               //
                    'user_code'     => encrypt(date('YmdHmi').\Illuminate\Support\Str::random(10)),          //
                    'name'          => $request->name,                                                                           //
                    'home_phone'    => $request->home_phone,                                                                     //
                    'cellphone'     => $request->cellphone,                                                                      //
                    'zip_code'      => $request->zip_code,                                                                       //
                    'address'       => $request->address,                                                                        //
                    'address_detail'=> $request->address_detail,                                                                 //
                    'gender'        => $request->gender,                                                                         //
                    'grade'         => 0,                                                                                        //
                    'email_yn'      => $request->email_check ? $request->email_check : 0,                                        //
                    'sms_yn'        => $request->sms_check ? $request->sms_check : 0,                                            //
                ]);
                $user->verified_token = Str::random(60);
                $user->save();


                $mail = Mail::to($request->email)->send(new VerifyMail($user,$subject,$user->verified_token));
                return view('auth.register.success');
            }

        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }
    /************************************************************************
     * Verified register user
     * @description : 이메일 인증 - 이메일 인증 액션
     * @url         : /check_email
     * @method      : post
     * @return      : json
     ************************************************************************/
    public function check_email(Request $request){
        try {
            $status = empty(User::whereEmail($request->email)->first());
            return response()->json(['status'=>$status],200,[],JSON_PRETTY_PRINT);
        } catch (\Exception $e){
            return response()->json(['msg'=>$e->getMessage()],500,[],JSON_PRETTY_PRINT);
        }
    }

    /************************************************************************
     * Verified register user
     * @description : 이메일 인증 - 이메일 인증 액션
     * @url         : /verified_email
     * @method      : get
     * @return      : view
     ************************************************************************/
    public function verified_email(Request $request){
        $user = User::whereEmail($request->email)->whereVerifiedToken($request->verified_token)->first();
        Auth()->login($user);                                                                                           // 로그인 (세션정보저장)
        if(!Auth::check()){
            flash("잘못된 형식이거나 만료된 토큰입니다. 다시 인증하여주십시오")->error();
            return redirect('/login');
        } else {
            $user->email_verified_at = Carbon::now();                                                                   // 이메일 인증시간 저장
            $user->save();
            flash('이메일이 인증되었습니다. <br> 피그리프를 마음껏 이용해보세요!');
            return redirect('/');
        }
    }
}
