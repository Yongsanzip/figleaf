<?php

namespace App\Http\Controllers\Client\MainMenu;

use App\Portfolio;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller{

    /************************************************************************
     * Construct
     * @description :
     ************************************************************************/
    public function __construct() {

    }

    /************************************************************************
     * Display main view
     * @description : 메인메뉴 - 디자이너 목록
     * @url         : /url
     * @method      : GET
     * @return      : view , data , msg ...
     ************************************************************************/
    public function index(){
        try {
            $datas = User::whereRoleId(2)->limit(8)->with('portfolio')->has('portfolio')->get();
            return view('client.mainMenu.brand.index',compact('datas'));
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
            $datas = Portfolio::find($id)->first();
            return view('client.mainMenu.brand.show',compact('datas'));
        } catch (\Exception $e){
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            flash($msg)->error();
            // return redirect(route('url'));
            return back();
        }
    }

}
