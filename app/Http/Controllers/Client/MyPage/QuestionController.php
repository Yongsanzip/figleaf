<?php

namespace App\Http\Controllers\Client\MyPage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @description 마이페이지 - 1:1 문의
     * @url /mypage_question
     * @return view
     */
    public function index()
    {
        return view('client.mypage.question.index');
    }

    /**
     * Show the form for creating a new resource.
     * @description 마이페이지 - 1:1 문의 하기
     * @return view
     */
    public function create()
    {
        return view('client.mypage.question.partial.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * @description 마이페이지 - 1:1 문의 보기
     * @param  int  $id
     * @return view
     */
    public function show($id)
    {
        return view('client.mypage.question.partial.show.index');
    }

    /**
     * Show the form for editing the specified resource.
     * @description 마이페이지 - 1:1 문의 하기 수정
     * @param  int  $id
     * @return view
     */
    public function edit($id)
    {
        return view('client.mypage.question.partial.create.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @description 마이페이지 - 1:1 문의 삭제
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
