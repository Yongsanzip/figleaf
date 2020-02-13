<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgreeController extends Controller
{
    /************************************************************************
     * Display a listing of the resource.
     * @description 회원가입 - 약관동의
     * @url : /agree
     * @return view
     ************************************************************************/
    public function index() {
        return view('auth.register.agree');
    }

    /************************************************************************
     * Display a listing of the resource.
     * @description 회원가입 - 약관동의 완료
     * @url : /agree_complete
     * @return view
     ************************************************************************/
    public function complete(Request $request) {
        $request->session()->put('sms_check',$request->sms_check ? 1 : 0);                                              // SMS 수신 체크
        $request->session()->put('email_check',$request->email_check ? 1 : 0);                                          // 이메일 수신 체크
        return redirect()->route('register');
    }
}
