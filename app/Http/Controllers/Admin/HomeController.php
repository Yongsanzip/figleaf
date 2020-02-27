<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller {

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
    public function index(){
        try {

        } catch (\Exception $e){
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
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
    public function create(){
        try {

        } catch (\Exception $e){
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
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
    public function store(Request $request){
        try {

        } catch (\Exception $e){
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
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
    public function show($id){
        try {

        } catch (\Exception $e){
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
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

        } catch (\Exception $e){
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            flash($msg)->error();
            // return redirect(route('url'));
            return back();
        }
    }
}
