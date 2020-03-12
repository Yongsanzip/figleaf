<?php

namespace App\Http\Controllers\Client\Search;

use App\Portfolio;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     * @description 검색
     * @url /search
     * @return view
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        // limit = 4

        // 디자이너 - 포트폴리오
        $designer = Portfolio::where('hidden_yn', 0)->whereHas('user', function ($q) use ($keyword) {
            $q->where('name', 'LIKE', '%' . $keyword . '%');
        })->orderBy('created_at', 'desc')->get();

        // 브랜드 - 포트폴리오
        $brand = Portfolio::where('hidden_yn', 0)->whereHas('brand', function ($q) use ($keyword) {
            $q->where('name_ko', 'LIKE', '%' . $keyword . '%');
        })->orderBy('created_at', 'desc')->get();

        // 프로젝트
        $project = Project::where('title', 'LIKE', '%' . $keyword . '%')->orderBy('created_at', 'desc')->get();


        return view('client.search.index', compact('designer', 'brand', 'project', 'keyword'));
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
     * @description 검색 - 더보기
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        error_log($id);
        if ($id == 1){ // 디자이너
            return view('client.search.designer.index');
        } elseif ($id == 2) { // 브랜드
            return view('client.search.brand.index');
        } elseif ($id == 3) { // 뉴스
            return view('client.search.news.index');
        } else { // 프로젝트
            return view('client.search.project.index');
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
