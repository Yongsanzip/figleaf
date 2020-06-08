<?php

namespace App\Http\Controllers\Admin\User;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformationController extends Controller {
    /************************************************************************
     * Construct
     * @description :
     ************************************************************************/
    public function __construct() {

    }

    /************************************************************************
     * Display main view
     * @description : 설명1 - 설명2
     * @url         : /url
     * @method      : GET
     * @return      : view , data , msg ...
     ************************************************************************/
    public function index(Request $request) {
        try {
            $condition = ["name"=>'회원명',"email"=>'이메일',"cellphone"=>'전화번호'];
            if($request->searchCondition){
                $datas = User::where('role_id','!=',4)->where($request->searchCondition,'LIKE','%'.$request->searchKeyword.'%')->paginate(15);
            } else {
                $datas = User::where('role_id','!=',4)->paginate(15);
            }

            return view('admin.user.information.index',compact('datas','condition'));
        } catch (\Exception $e) {
            $msg = '잘못된 접근입니다. <br>' . $e->getMessage();
            flash($msg)->error();
            // return redirect(route('url'));
            return back();
        }
    }

    /************************************************************************
     * Display create view
     * @description : 설명1 - 설명2
     * @url         : /url
     * @method      : GET
     * @return      : view , data , msg ...
     ************************************************************************/
    public function create() {
        try {

        } catch (\Exception $e) {
            $msg = '잘못된 접근입니다. <br>' . $e->getMessage();
            flash($msg)->error();
            // return redirect(route('url'));
            return back();
        }
    }

    /************************************************************************
     * Display create action
     * @description : 설명1 - 설명2
     * @url         : /url
     * @method      : POST
     * @return      : view , data , msg ...
     ************************************************************************/
    public function store(Request $request) {
        try {

        } catch (\Exception $e) {
            $msg = '잘못된 접근입니다. <br>' . $e->getMessage();
            flash($msg)->error();
            // return redirect(route('url'));
            return back();
        }
    }

    /************************************************************************
     * Display detail view
     * @description : 설명1 - 설명2
     * @url         : /url/{id}
     * @method      : GET
     * @return      : view , data , msg ...
     ************************************************************************/
    public function show($id) {
        try {
            $datas = User::whereUserCode($id)->first();
            return view('admin.user.information.partial.show.index',compact('datas'));
        } catch (\Exception $e) {
            $msg = '잘못된 접근입니다. <br>' . $e->getMessage();
            flash($msg)->error();
            // return redirect(route('url'));
            return back();
        }
    }

    /************************************************************************
     * Display edit view
     * @description : 설명1 - 설명2
     * @url         : /url/{id}/edit
     * @method      : /GET
     * @return      : view , data , msg ...
     ************************************************************************/
    public function edit($id) {
        try {
            if(auth()->user()->role->id ==4){
//                $roles = Role::where('id','!=',4)->get();
                $roles = Role::all();
            } else {
                $roles = Role::whereIn('id',[1,2])->get();
            }

            $datas = User::whereUserCode($id)->first();
            return view('admin.user.information.partial.edit.index',compact('datas','roles'));
        } catch (\Exception $e) {
            $msg = '잘못된 접근입니다. <br>' . $e->getMessage();
            flash($msg)->error();
            // return redirect(route('url'));
            return back();
        }
    }

    /************************************************************************
     * Display update action
     * @description : 설명1 - 설명2
     * @url         : /url/{id}
     * @method      : PUT
     * @return      : view , data , msg ...
     ************************************************************************/
    public function update(Request $request, $id) {
        try {

                $user = User::find($id);
                $user->name=$request->name;                                                                             // 이름
                $user->gender=$request->gender;                                                                         // 성별
                $user->email_yn=$request->email_yn ? 1 : 0;                                                             // 이메일 수신
                $user->sms_yn=$request->sms_yn ? 1 : 0;                                                                 // 문자 수신
                $user->home_phone=$request->home_phone;                                                                 // 전화번호
                $user->cellphone=$request->cellphone;                                                                   // 휴대폰번호
                $user->zip_code=$request->zip_code;                                                                     // 우편번호
                $user->address=$request->address;                                                                       // 주소
                $user->address_detail=$request->address_detail;                                                         // 상세주소
                $user->save();

                return redirect(route('admin_information.show',['id'=>$user->user_code]));
        } catch (\Exception $e) {
            $msg = '잘못된 접근입니다. <br>' . $e->getMessage();
            flash($msg)->error();
            // return redirect(route('url'));
            return back();
        }
    }

    /************************************************************************
     * Display destroy action
     * @description : 설명 1 설명
     * @url         : /url/{id}
     * @method      : DELETE
     * @return      : view , data , msg ...
     ************************************************************************/
    public function destroy($id) {
        try {
            User::destroy($id);
        } catch (\Exception $e) {
            $msg = '잘못된 접근입니다. <br>' . $e->getMessage();
            flash($msg)->error();
            // return redirect(route('url'));
            return back();
        }
    }

}
