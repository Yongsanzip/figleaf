<?php

namespace App\Http\Controllers\Admin\Project;

use App\CategoryDetail;
use App\Project;
use App\ProjectImage;
use App\ViewProject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * @description Admin 프로젝트 (1: 대기중 2: 진행중 3: 반려 4: 실패 5: 성공)
     * @url : /admin_project
     * @return view
     */
    public function index(Request $request)
    {
        $page_num = 17;
        $keyword = $request->keyword;
        $option = $request->option;
        $status = $request->status;
        $search_category = $request->search_category;
        $categories = CategoryDetail::get();
        $datas = new ViewProject();

        // 검색
        if ($option == 'title'){                                                                                        // 제목
            $search_category = '';
            $datas = $datas->where('title', 'like', '%' . $keyword . '%');
        } else if ($option == 'designer_name') {                                                                        // 디자이너
            $search_category = '';
            $datas = $datas->whereHas('introduction', function ($q) use ($keyword) {
                $q->where('designer_name', 'like', '%' . $keyword . '%');
            });
        } else if ($option == 'category') {                                                                             // 카테고리 (category_detail)
            $keyword = '';
            $datas = $datas->where('category2_id', $search_category);
        }


        if ($status == 1) {                                                                                             // 대기중
            $datas = $datas->where(function ($q) {
                $q->where('condition', 1);
                $q->orWhere('condition', 3);
            })->orderBy('id', 'desc')->paginate($page_num);
        } elseif ($request->status == 2) {                                                                              // 진행중
            $datas = $datas->where('condition', 2)->orderBy('id', 'desc')->paginate($page_num);
        } else {                                                                                                        // 완료
            $datas = $datas->where(function ($q) {
                $q->where('condition', 4);
                $q->orWhere('condition', 5);
            })->orderBy('id', 'desc')->paginate($page_num);

        }


        return view('admin.project.index', compact('datas', 'option', 'keyword', 'status', 'categories', 'search_category'));
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
     * @description Admin 프로젝트 - 반려 사유 저장
     * @url : /admin_project
     * @return json
     */
    public function store(Request $request)
    {
        $project = Project::where('id', $request->project_id)->first();

        $project->update([
            'condition'         => $request->condition,
            'reason'            => $request->reason
        ]);

        if ($request->condition == 2) {                                             // 진행
            $timestamp = strtotime("+1 days");
            $start_date = date("Y-m-d 00:00:00", $timestamp);

            $project->update([
                'start_date'    => $start_date,                                     // 다음 날 00시부터 진행
            ]);
        }

        return response()->json('success', 200, [], JSON_PRETTY_PRINT);
    }

    /**
     * Display the specified resource.
     * @description Admin 프로젝트 - 상세보기
     * @url : /admin_project/{$id}
     * @param  int  $id
     * @return view
     */
    public function show($id)
    {
        $data = Project::where('id', $id)->first();
        $supporter_count = ViewProject::find($id)->supporter_count;                                                     // 후원자수

        return view('admin.project.partial.show.index', compact('data', 'supporter_count'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @description Admin 프로젝트 - 이미지 다운로드
     * @url : /admin_project/{id}
     * @return download
     */
    public function edit($id)
    {
        $path = ProjectImage::find($id)->image_path;

        return Storage::download($path);
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
