<?php

namespace App\Http\Controllers\Admin\Project;

use App\Community;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     * @description Admin 프로젝트 - 커뮤니티 목록/검색
     * @url : /admin_community
     * @return view
     */
    public function index(Request $request)
    {
        try {
            $datas = new Community();                                                                                   // 커뮤니티
            $search = $request->search;                                                                                 // 검색 옵션(select-option)
            $keyword = $request->keyword;                                                                               // 검색어
            $url = $request->getPathInfo();

            if ($search == 'title') {                                                                                   // 검색옵션 - 프로젝트명
                $datas = $datas->whereHas('project', function ($q) use ($keyword) {
                    $q->where('title', 'like', '%' . $keyword . '%');
                });
            } elseif ($search == 'email' || $search == 'name') {                                                        // 검색옵션 - 이메일 또는 작성자명
                $datas = $datas->whereHas('user', function ($q) use ($keyword, $search) {
                    $q->where($search, 'like', '%' . $keyword . '%');
                });
            } elseif ($search == 'contents') {                                                                          // 검색옵션 - 내용
                $datas = $datas->where('contents', 'like', '%' . $keyword . '%');
            }

            $datas = $datas->orderBy('created_at', 'desc')->paginate(17);
            return view('admin.project.community.index', compact('datas', 'search', 'keyword', 'url'));
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {

        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    /**
     * Store a newly created resource in storage.
     * @description Admin 프로젝트 - 커뮤니티 히든여부 저장
     * @url : /admin_community
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response json
     */
    public function store(Request $request)
    {
        try {
            if ($request->hidden_yn == 0) {
                $hidden_yn = 1;                                                                                         // 히든처리
                $success = 'hidden_y';
            } else {
                $hidden_yn = 0;                                                                                         // 히든해제 처리
                $success = 'hidden_n';
            }

            Community::where('id', $request->id)->update([
                'hidden_yn'         => $hidden_yn
            ]);

            return response()->json($success, 200, [], JSON_PRETTY_PRINT);
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    /**
     * Display the specified resource.
     * @description Admin 프로젝트 - 커뮤니티
     * @url : /admin_community/{$id}
     * @param  int  $id
     * @return view
     */
    public function show($id)
    {
        try {
            $data = Community::find($id);
            $url = url()->previous();

            return view('admin.project.community.partial.show.index', compact('data', 'url'));
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {

        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
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
        try {

        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {

        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }
}
