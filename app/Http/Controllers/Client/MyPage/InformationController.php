<?php

namespace App\Http\Controllers\Client\MyPage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformationController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }
    /**************************************************************
     * Display a listing of the resource.
     * @description 마이페이지 - 회원정보
     * @url /mypage_information
     * @return view
     **************************************************************/
    public function index() {
        $datas = auth()->user();
        return view('client.mypage.information.index',compact('datas'));
    }

    /**************************************************************
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     **************************************************************/
    public function update(Request $request, $id) {
        //
    }

    /**************************************************************
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     **************************************************************/
    public function destroy($id) {

    }
}
