<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Notice;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Controllers\Controller;

class AdminController {

    /************************************************************************
     * Construct
     * @description :
     ************************************************************************/
    public function __construct() {

    }

    /************************************************************************
     * Construct
     * @description :
     ************************************************************************/
    protected function validator(array $data) {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'cellphone'=>['required', 'string', 'max:255'],
            'address'=>['required', 'string', 'max:255'],
            'address_detail'=>['required', 'string', 'max:255'],
        ]);
    }

    /************************************************************************
     * Display main view
     * @description : 관리자 - 공지사항목록
     * @url         : /admin_notice
     * @method      : GET
     * @return      : view
     ************************************************************************/
    public function index(Request $request){
        try {
            $datas = User::whereRoleId(3)->paginate(10);
            return view('admin.admin.index',compact('datas'));
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    /************************************************************************
     * Display create view
     * @description : 관리자 - 공지사항 생성페이지
     * @url         : /admin_notice/create
     * @method      : GET
     * @return      : view
     ************************************************************************/
    public function create(){
        try {
            return view('admin.admin.partial.create.index');
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    /************************************************************************
     * Display create action
     * @description : 관리자 - 공지사항 생성액션
     * @url         : /admin_notice
     * @method      : POST
     * @return      : redirect
     ************************************************************************/
    public function store(Request $request){
        try {
            $vali = Validator::make($request->all,[
                'name' => ['required', 'string', 'max:255'],
                'cellphone'=>['required', 'string', 'max:255'],
                'address'=>['required', 'string', 'max:255'],
                'address_detail'=>['required', 'string', 'max:255'],
                'password' => ['required', 'string', 'max:255'],
            ]);
            if($vali->fails()){
                return back()->with('alert','입력된값이 올바르지않습니다');
            }

            $user = User::firstOrCreate([
                'role_id'       => 3,
                'email'         => $request->email,
                'password'      => bcrypt($request->password),
                'user_code'     => encrypt(date('YmdHmi').\Illuminate\Support\Str::random(10)),
                'name'          => $request->name,
                'home_phone'    => '15665027',
                'cellphone'     => $request->cellphone,
                'zip_code'      => $request->zip_code,
                'address'       => $request->address,
                'address_detail'=> $request->address_detail,
                'gender'        => $request->gender,
                'grade'         => 0,
                'email_yn'      => 0,
                'sms_yn'        => 0,
                'email_verified_at' => \Carbon\Carbon::today(),
                'thumbnail' => '1',
            ]);
            $user->verified_token = Str::random(60);
            $user->save();
            return redirect(route('admin_admin.index'));
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    /************************************************************************
     * Display detail view
     * @description : 관리자 - 공지사항 상새
     * @url         : /admin_notice/{id}
     * @method      : GET
     * @return      : view
     ************************************************************************/
    public function show($id){
        try {
            $datas = User::find($id);
            return view('admin.admin.partial.show.index',compact('datas'));
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    /************************************************************************
     * Display edit view
     * @description : 관리자 - 공지사항 수정 페이지
     * @url         : /admin_notice/{id}/edit
     * @method      : /GET
     * @return      : view , data , msg ...
     ************************************************************************/
    public function edit($id) {
        try {
            $datas = User::find($id);
            return view('admin.admin.partial.edit.index',compact('datas'));
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    /************************************************************************
     * Display update action
     * @description : 설명1 - 설명2
     * @url         : /url/{id}
     * @method      : PUT
     * @return      : view , data , msg ...
     ************************************************************************/
    public function update(Request $request, $id){
        try {

        if ($this->validator($request->all())->fails()){
            return back()->with('alert','입력된값이 올바르지않습니다');
        }
            $user = User::find($id);
            $user->email = $request->email;
            $user->name = $request->name;
            $user->cellphone = $request->cellphone;
            $user->address = $request->address;
            $user->address_detail = $request->address_detail;
            $user->gender = $request->gender;
            if($request->password){
                $user->password =bcrypt($request->password);
            }
            $user->save();

            flash('수정되었습니다')->clear();
            return  redirect(route('admin_admin.show',['id'=>$id]));
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
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
            return redirect(route('admin_admin.index'));
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }
}
