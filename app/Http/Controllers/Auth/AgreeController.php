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
        $sns_email_check =  $request->sns_email_check ? 1 : 0;
        //return view('auth.register',compact('sns_email_check'));
        return redirect()->route('register')->with( ['sns_email_check' => $sns_email_check]);
    }
}
