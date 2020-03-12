<?php

namespace App\Http\Controllers\Client\MyPage;

use App\Bank;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
        $banks = Bank::whereUseYn(1)->get();
        return view('client.mypage.information.index',compact('datas','banks'));
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
            $msg = '기존비밀번호가 올바르지 않습니다.';                                                                        // 반환 메세지
            if(Hash::check($request->password,auth()->user()->getAuthPassword())){                                      // 넘어온 비밀번호와 기존 비밀번호가 맞다면 return 201 status
                $msg = '새로운 비밀번호를 입력해주세요.';
                return response()->json(['msg'=>$msg],201,[],JSON_PRETTY_PRINT);
            } else {
                return response()->json(['msg'=>$msg],522,[],JSON_PRETTY_PRINT);                          // 맞지않다면 522 status
            }
        } catch (\Exception $e){                                                                                        // 에러시 519 status
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            return response()->json(['msg'=>$msg],519,[],JSON_PRETTY_PRINT);
        }
    }

    /************************************************************************
     * Display register view
     * @description : 회원가입 - 회원가입 액션
     * @url         : /mypage_information/{params}
     * @method      : PUT
     * @return      : view
     ************************************************************************/
    public function update(Request $request, $id) {
        try {
            User::find(auth()->user()->id)->update([                                                                    // 로그인된 유저의 정보를 변경
                'gender'=>$request->gender,                                                                             // 성별
                'email_yn'=>$request->email_yn ? 1 : 0,                                                                 // 이메일 수신
                'sms_yn'=>$request->sms_yn ? 1 : 0,                                                                     // 문자 수신
                'home_phone'=>$request->home_phone,                                                                     // 전화번호
                'cellphone'=>$request->cellphone,                                                                       // 휴대폰번호
                'zip_code'=>$request->zip_code,                                                                         // 우편번호
                'address'=>$request->address,                                                                           // 주소
                'address_detail'=>$request->address_detail,                                                             // 상세주소
                'password'=>$request->new_password                                                                      // 비밀번호가 있다면 ? hash(패스워드) 아니라면 기존 패스워드
                    ? Hash::make($request->new_password) : auth()->user()->getAuthPassword(),                           //
            ]);
            flash('정보가 수정되었습니다.')->success();
            return redirect(route('mypage_information.index'));
        } catch (\Exception $e){                                                                                        // 에러시 519 status
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            flash($msg)->error();
            return back();
        }
    }

    /************************************************************************
     * remove user
     * @description : 회원탈퇴 - 회원탈퇴 액션
     * @url         : /mypage_information/{params}
     * @method      : DELETE
     * @return      : view
     ************************************************************************/
    public function destroy($id) {
        try {
            User::destroy(auth()->user()->id);                                                                          // 로그인된 유저의 정보를 삭제
            Auth::logout();                                                                                             // 예방차원에서의 logout 처리
            flash('회원 탈퇴처리 되었습니다. 그동안 피그리프를 이용해주셔서 감사합니다.')->success();
            return redirect(route('mypage_information.index'));
        } catch (\Exception $e){                                                                                        // 에러시 flash 메세지
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            flash($msg)->error();
            return back();
        }
    }

}
