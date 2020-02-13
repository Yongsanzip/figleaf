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
        flash("성공")->success();
        flash()->overlay('모달창','모달타이틀');
        return view('client.index');
    }
}
