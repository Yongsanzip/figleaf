<?php

namespace App\Http\Controllers\Admin\Project;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * @description Admin 프로젝트
     * @url : /admin_project
     * @return view
     */
    public function index()
    {
        $page_num = 17;
        // 1: 대기중 2: 진행중 3: 반려 4: 실패 5: 성공
         $datas = Project::where('progress', 100)->orderBy('created_at', 'desc')->paginate($page_num);
     /*   if ($request->menu) {  // 대기중
            $datas = Project::where('condition',1)->get();
        } elseif ($request->menu) { // 진행중
            $datas = Project::where('condition',2)->get();
        } else {  // 완료
            $datas = Project::where('condition',4)->get();
            //$datas = Project::where('condition',5)->get();
        }*/


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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Project::where('id', $request->project_id)->update([
            'condition'             => $request->condition
        ]);

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
