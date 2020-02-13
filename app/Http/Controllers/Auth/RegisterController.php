<?php

namespace App\Http\Controllers\Auth;

use App\Mail\VerifyMail;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
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

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
   /* protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }*/

   protected function showRegistrationForm(Request $request){
       $sms_check = $request->session()->get('sms_check');                                                          // SMS 수신 체크
       $email_check = $request->session()->get('email_check');                                                      // 이메일 수신 체크
       $request->session()->forget('sms_check');                                                                   // SMS 세션 삭제
       $request->session()->forget('email_check');                                                                 // 이메일 세션 삭제
       return view('auth.register',compact('sms_check','email_check'));
   }
    protected function create(Request $request) {
        $user = User::create([
            'role_id'       => 1,
            'email'         => $request->email,
            'password'      => bcrypt($request->password),
            'name'          => $request->name,
            'home_phone'    => $request->home_phone,
            'cellphone'     => $request->cellphone,
            'zip_code'      => $request->zip_code,
            'address'       => $request->address,
            'address_detail'=> $request->address_detail,
            'gender'        => $request->gender,
            'grade'         => 0,
            'email_yn'      => $request->email_check,
            'sms_yn'        => $request->sms_check,
        ]);
        $subject ='';

        $mail = Mail::to($request->email)->send(new VerifyMail($user,$subject,$check_user->verify_token));
        return view('auth.register.success');
    }

}
