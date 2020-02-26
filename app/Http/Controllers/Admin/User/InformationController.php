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
    public function index() {
        try {
            $datas = User::where('role_id','!=',4)->paginate(15);
            return view('admin.user.information.index',compact('datas'));
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
