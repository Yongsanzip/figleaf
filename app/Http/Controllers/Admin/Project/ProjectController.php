<?php

namespace App\Http\Controllers\Admin\Project;

use App\Project;
use App\ProjectImage;
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
        // 검색
        if ($option = 'title')
        $datas = Project::where('title', 'like', '%' . $keyword . '%')->first();


        if ($request->status == 1) {                                                                                    // 대기중
            $datas = Project::where('condition', 1)->orWhere('condition', 3)->orderBy('created_at', 'desc')->paginate($page_num);
        } elseif ($request->status == 2) {                                                                              // 진행중
            $datas = Project::where('condition', 2)->orderBy('created_at', 'desc')->paginate($page_num);
        } else {                                                                                                        // 완료
            $datas = Project::where('condition', 4)->orWhere('condition', 5)->orderBy('created_at', 'desc')->paginate($page_num);
        }


        return view('admin.project.index', compact('datas'));
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
        $conditions = config('projectStatus.condition');

        $data = Project::where('id', $id)->first();
        return view('admin.project.partial.show.index', compact('data', 'conditions'));
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
