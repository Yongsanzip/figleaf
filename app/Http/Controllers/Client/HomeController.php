<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @description 메인
     * @url : /
     * @return view
     */
    public function index() {
        error_log("와와아ㅗ아");
        flash("성공")->success();
        flash("실패")->error();
        flash("중요")->important();
        flash("정보")->info();
        flash("메세지")->message();
        flash("경고")->warning();
        flash( '클리어')->clear();
        //flash()->overlay('모달창','모달타이틀');
        return view('client.index');
    }
}
