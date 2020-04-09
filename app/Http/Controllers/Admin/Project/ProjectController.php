<?php

namespace App\Http\Controllers\Admin\Project;

use App\CategoryDetail;
use App\Project;
use App\ProjectImage;
use App\ViewAdminProject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * @description : Admin 프로젝트 (1: 대기중 2: 진행중 3: 반려 4: 실패 5: 성공)
     * @url         : /admin_project
     * @method      : GET
     * @return      : view
     */
    public function index(Request $request)
    {
//        try {
            $page_num        = 17;                                                                                      // 한 페이지에 17개
            $keyword         = $request->keyword;                                                                       // 검색어
            $option          = $request->option;                                                                        // 검색 select-option
            $search_category = $request->search_category;                                                               // 카테고리
            $status          = $request->status;                                                                        // 프로젝트 진행 상태
            $categories      = CategoryDetail::get();                                                                   // 2차카테고리
            $datas           = new ViewAdminProject();

            // 검색
            if ($option == 'title'){                                                                                    // 제목
                $search_category = '';                                                                                  // 검색된 카테고리 초기화
                $datas = $datas->where('title', 'like', '%' . $keyword . '%');
            } else if ($option == 'designer_name') {                                                                    // 디자이너
                $search_category = '';                                                                                  // 검색된 카테고리 초기화
                $datas = $datas->whereHas('introduction', function ($q) use ($keyword) {
                    $q->where('designer_name', 'like', '%' . $keyword . '%');
                });
            } else if ($option == 'category') {                                                                         // 카테고리 (category_detail)
                $keyword = '';                                                                                          // 검색어 초기화
                $datas = $datas->where('category2_id', $search_category);
            }


            if ($status == 1) {                                                                                         // 대기중 (대기중, 반려)
                $datas = $datas->where(function ($q) {
                    $q->where('condition', 1);
                    $q->orWhere('condition', 3);
                })->orderBy('id', 'desc')->paginate($page_num);
            } elseif ($request->status == 2) {                                                                          // 진행중
                $datas = $datas->where('condition', 2)->orderBy('id', 'desc')->paginate($page_num);
            } else {                                                                                                    // 완료 (실패, 성공)
                $datas = $datas->where(function ($q) {
                    $q->where('condition', 4);
                    $q->orWhere('condition', 5);
                })->orderBy('id', 'desc')->paginate($page_num);
            }

            return view('admin.project.index', compact('datas', 'option', 'keyword', 'status', 'categories', 'search_category'));

        /*} catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }*/
    }

    /**
     * Store a newly created resource in storage.
     * @param       : \Illuminate\Http\Request  $request
     * @description : Admin 프로젝트 - 반려 사유 저장
     * @url         : /admin_project
     * @method      : POST
     * @return      : json
     */
    public function store(Request $request)
    {
        try {
            $project = Project::where('id', $request->project_id)->first();

            $project->update([                                                                                          // 진행중 또는 반려 저장
                'condition'         => $request->condition,
                'reason'            => $request->reason
            ]);

            if ($request->condition == 2) {                                                                             // 진행
                $timestamp = strtotime("+1 days");                                                                // 1일 뒤
                $start_date = date("Y-m-d 00:00:00", $timestamp);

                $project->update([
                    'start_date'    => $start_date,                                                                     // 다음 날 오전 12시부터 진행
                ]);
            }
            return response()->json('success', 200, [], JSON_PRETTY_PRINT);
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    /**
     * Display the specified resource.
     * @description : Admin 프로젝트 - 상세보기
     * @url         : /admin_project/{$id}
     * @method      : GET
     * @param       : int  $id
     * @return      : view
     */
    public function show($id)
    {
        try {
            $data = Project::where('id', $id)->first();
            $supporter_count = ViewProject::find($id)->supporter_count;                                                 // 후원자수 (후원취소자는 제외)

            return view('admin.project.partial.show.index', compact('data', 'supporter_count'));
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     * @param       : int  $id
     * @description : Admin 프로젝트 - 이미지 다운로드 (통장사본, 사업자등록증)
     * @url         : /admin_project/{id}
     * @method      : GET
     * @return      : download
     */
    public function edit($id)
    {
        try {
            $path = ProjectImage::find($id)->image_path;

            return Storage::download($path);
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }
}
