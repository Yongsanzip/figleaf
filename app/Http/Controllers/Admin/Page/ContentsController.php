<?php

namespace App\Http\Controllers\Admin\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @description Admin 페이지 - 콘텐츠 관리
     * @url : /admin_contents
     * @return view
     */
    public function index()
    {
        return view('admin.page.contents.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @description Admin 페이지 - 콘텐츠 관리 상세
     * @url : /admin_contents/{$id}
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.page.contents.partial.show.index');
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
