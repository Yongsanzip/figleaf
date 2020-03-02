<?php

namespace App\Http\Controllers\Admin\Notice;

use App\Notice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoticeController {

    /************************************************************************
     * Construct
     * @description :
     ************************************************************************/
    public function __construct() {

    }

    /************************************************************************
     * Display main view
     * @description : 관리자 - 공지사항목록
     * @url         : /admin_notice
     * @method      : GET
     * @return      : view
     ************************************************************************/
    public function index(){
        try {
            $datas = Notice::orderBy('created_at','DESC')->paginate(15);
            return view('admin.notice.index',compact('datas'));
        } catch (\Exception $e){
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            flash($msg)->error();
            // return redirect(route('url'));
            return back();
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
            return view('admin.notice.partial.create.index');
        } catch (\Exception $e){
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            flash($msg)->error();
            // return redirect(route('url'));
            return back();
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
//        try {
            Notice::create([
                'title' =>$request->title,
                'content'=>$request['notice-trixFields']['content'],
                'up_fix'=>$request->up_fix ? 1 : 0,
                'user_id'=>auth()->user()->id,
            ]);
            return redirect(route('admin_notice.index'));
//        } catch (\Exception $e){
//            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
//            flash($msg)->error();
//            // return redirect(route('url'));
//            return back();
//        }
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
            $datas = Notice::find($id);
            $datas->hit +=1;
            $datas->save();
            return view('admin.notice.partial.show.index',compact('datas'));
        } catch (\Exception $e){
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            flash($msg)->error();
            // return redirect(route('url'));
            return back();
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
            error_log(1);
            $datas = Notice::find($id);
            return view('admin.notice.partial.edit.index',compact('datas'));
        } catch (\Exception $e){
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
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
    public function update(Request $request, $id){
        try {
            return  redirect(route('admin_note.show',['id'=>$id]));
        } catch (\Exception $e){
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
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
            Notice::destroy($id);
            return redirect(route('admin_notice.index'));
        } catch (\Exception $e){
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            flash($msg)->error();
            // return redirect(route('url'));
            return back();
        }
    }
}
