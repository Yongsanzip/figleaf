<?php

namespace App\Http\Controllers\Admin\Notice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @description Admin 공지사항
     * @url : /admin_notice
     * @return view
     */
    public function index()
    {
        return view('admin.notice.index');
    }

    /**
     * Show the form for creating a new resource.
     * @description Admin 공지사항 생성
     * @url : /admin_notice/create
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notice.partial.create.index');
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
     * @description Admin 공지사항 - 상세보기
     * @url : /admin_notice/{$id}
     * @param  int  $id
     * @return view
     */
    public function show($id)
    {
        return view('admin.notice.partial.show.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
