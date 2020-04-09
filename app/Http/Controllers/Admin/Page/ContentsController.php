<?php

namespace App\Http\Controllers\Admin\Page;

use App\Content;
use App\ContentDetail;
use App\Portfolio;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
            $status = 0;                                                                                                // 포트폴리오
        } else {
            $status = 1;                                                                                                // 프로젝트
        }

        $content_id = $request->status;                                                                                 // 0: 포트폴리오, 1: 프로젝트
        $checked_contents = $request->checked_contents;                                                                 // 선택된 포트폴리오/프로젝트 id

        if ($checked_contents) {                                                                                        // 모두 체크 해제 되었을 때
            foreach ($checked_contents as $data) {
                ContentDetail::firstOrcreate([
                    'content_id'        => $content_id,
                    'model_id'          => $data,
                    'status'            => $status,
                ]);
            }
            $delete_data = ContentDetail::where('content_id', $content_id)->whereNotIn('model_id', $checked_contents)->get();
        } else {
            $delete_data = ContentDetail::where('content_id', $content_id)->get();
        }

        foreach ($delete_data as $data) {                                                                               // 선택 해제된 데이터 삭제
            $data->forceDelete();
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
        if ($id == 1 || $id == 2) {                                                                                     // 포트폴리오
            $datas = Portfolio::where('open_yn',1)->Leftjoin('content_details', function ($join) use ($id) {
                    $join->on('portfolios.id', '=', 'content_details.model_id')
                        ->where('content_details.content_id', '=', $id)
                        ->where('content_details.status', '=', 0);
                })
                ->select(DB::raw('portfolios.*', 'portfolios.id as id', 'content_details.*'))
                ->orderBy('status', 'desc')
                ->get();
            $menu = Content::find($id);
            $status = 0;

        } else {                                                                                                        // 프로젝트
            $datas = Project::where('condition', 2)->orWhere('condition', 4)->orWhere('condition', 5)
                ->Leftjoin('content_details', function ($join) use ($id) {
                    $join->on('projects.id', '=', 'content_details.model_id')
                        ->where('content_details.content_id', '=', $id)
                        ->where('content_details.status', '=', 1);
                })
                ->select(DB::raw('projects.*', 'projects.id as p_id', 'content_details.*'))
                ->orderBy('content_details.status', 'desc')
                ->get();
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
