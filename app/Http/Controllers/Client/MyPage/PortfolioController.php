<?php

namespace App\Http\Controllers\Client\MyPage;

use App\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller {

    /************************************************************************
     * Construct
     * @description : 포트폴리오 설정
     ************************************************************************/
    public function __construct() {

    }

    /************************************************************************
     * Display register view
     * @description : 회원가입 - 회원가입 액션
     * @url         : /mypage_information/{params}
     * @method      : PUT
     * @return      : view
     ************************************************************************/
    public function index() {
        $datas = Portfolio::whereUserId(auth()->user()->id)->first();
        return view('client.mypage.portfolio.index',compact('datas'));
    }

    /************************************************************************
     * Display create view
     * @description : 설명1 - 설명2
     * @url         : /url
     * @method      : GET
     * @return      : view , data , msg ...
     ************************************************************************/
    public function create(){
        $datas = null;
        return view('client.mypage.portfolio.partial.edit',compact('datas'));
    }

    /************************************************************************
     * Display create action
     * @description : 설명1 - 설명2
     * @url         : /url
     * @method      : POST
     * @return      : view , data , msg ...
     ************************************************************************/
    public function store(Request $request){

    }

    /************************************************************************
     * Display detail view
     * @description : 설명1 - 설명2
     * @url         : /url/{id}
     * @method      : GET
     * @return      : view , data , msg ...
     ************************************************************************/
    public function show($id){

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
            $datas = Portfolio::find($id);
            return view('client.mypage.portfolio.partial.edit',compact('datas'));
        } catch (\Exception $e){
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            flash($msg)->error();
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

    }

    /************************************************************************
     * Display destroy action
     * @description : 설명 1 설명
     * @url         : /url/{id}
     * @method      : DELETE
     * @return      : view , data , msg ...
     ************************************************************************/
    public function destroy($id) {
        //
    }
}
