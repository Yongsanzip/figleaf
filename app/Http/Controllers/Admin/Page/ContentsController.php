<?php

namespace App\Http\Controllers\Admin\Page;

use App\Content;
use App\ContentDetail;
use App\Portfolio;
use App\Project;
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
        $datas = Content::get();
        return view('admin.page.contents.index', compact('datas'));
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
     * @description Admin 페이지 - 콘텐츠 관리 상세 저장
     * @url : /admin_contents
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->status < 3) {
            $status = 0;                // 포트폴리오
        } else {
            $status = 1;                // 프로젝트
        }

        $content_id = $request->status;

        foreach ($request->checked_contents as $data) {
            ContentDetail::firstOrcreate([
                'content_id'        => $content_id,
                'model_id'          => $data,
                'status'            => $status,
            ]);
        }


        return response()->json('success', 200, [], JSON_PRETTY_PRINT);
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
        if ($id == 1 || $id == 2) {     // 포트폴리오
            $datas = Portfolio::orderBy('created_at', 'desc')->get();
            $menu = Content::find($id);
            $status = 0;
        } else {                        // 프로젝트
            $datas = Project::where('condition', 2)->orWhere('condition', 4)->orWhere('condition',5)->orderBy('created_at', 'desc')->get();
            $menu = Content::find($id);
            $status = 1;
        }

        return view('admin.page.contents.partial.show.index', compact('datas', 'menu', 'status'));
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
