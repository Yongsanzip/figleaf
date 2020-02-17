<?php

namespace App\Http\Controllers\Client\MyPage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class InformationController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }
    /************************************************************************
     * Display mypage information
     * @description : 마이페이지 - 회원정보
     * @url         : /register
     * @method      : post
     * @return      : view
     ************************************************************************/
    public function index() {
        $datas = auth()->user();
        return view('client.mypage.information.index',compact('datas'));
    }


    /************************************************************************
     * check user password when change password
     * @description : 마이페이지 - 비밀번호 확인체크
     * @url         : /check_password
     * @method      : post
     * @return      : msg
     ************************************************************************/
    public function check_password(Request $request){
        try {
            $msg = '기존비밀번호가 올바르지 않습니다.';
            if(Hash::check($request->password,auth()->user()->getAuthPassword())){
                return response()->json(['msg'=>$msg],201,[],JSON_PRETTY_PRINT);
            } else {
                return response()->json(['msg'=>$msg],519,[],JSON_PRETTY_PRINT);
            }
        } catch (\Exception $e){
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            return response()->json(['msg'=>$msg],519,[],JSON_PRETTY_PRINT);
        }
    }

    /************************************************************************
     * Display register view
     * @description : 회원가입 - 회원가입 액션
     * @url         : /register
     * @method      : post
     * @return      : view
     ************************************************************************/
    public function update(Request $request, $id) {
        //
    }

    /**************************************************************
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     **************************************************************/
    public function destroy($id) {

    }
}
