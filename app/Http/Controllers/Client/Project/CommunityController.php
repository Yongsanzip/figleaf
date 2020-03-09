<?php

namespace App\Http\Controllers\Client\Project;

use App\Community;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommunityController extends Controller
{

    /************************************************************************
     * Construct
     * @description :
     ************************************************************************/
    public function __construct() {

    }

    /************************************************************************
     * Display main view
     * @description : 설명1 - 설명2
     * @url         : /project_community
     * @method      : GET
     * @return      : view , data , msg ...
     ************************************************************************/
    public function index(){
        try {

        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    /************************************************************************
     * Display create view
     * @description : 설명1 - 설명2
     * @url         : /url
     * @method      : GET
     * @return      : view , data , msg ...
     ************************************************************************/
    public function create(){
        try {

        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    /************************************************************************
     * Display create action
     * @description : 프로젝트 보기 - 커뮤니티 작성 저장
     * @url         : /project_community
     * @method      : POST
     * @return      : redirect
     ************************************************************************/
    public function store(Request $request){
        try {
            error_log($request->project_id);
            error_log($request->contents);
            Community::create([
                'project_id'            => $request->project_id,
                'user_id'               => auth()->user()->id,
                'contents'              => $request->contents,
                'hidden_yn'             => 0
            ]);

            return redirect('/project/'.$request->project_id.'?community');
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    /************************************************************************
     * Display detail view
     * @description : 설명1 - 설명2
     * @url         : /url/{id}
     * @method      : GET
     * @return      : view , data , msg ...
     ************************************************************************/
    public function show($id){
        try {

        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    /************************************************************************
     * Display edit view
     * @description : 설명1 - 설명2
     * @url         : /url/{id}/edit
     * @method      : /GET
     * @return      : view , data , msg ...
     ************************************************************************/
    public function edit($id) {
        try {

        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    /************************************************************************
     * Display update action
     * @description : 프로젝트 - 커뮤니티 수정
     * @url         : /project_community
     * @method      : PUT
     * @return      : json
     ************************************************************************/
    public function update(Request $request, $id){
        try {
            Community::where('id', $id)->update([
                'contents'      => $request->contents
            ]);

            return response()->json('success', 200, [], JSON_PRETTY_PRINT);

        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    /************************************************************************
     * Display destroy action
     * @description : 설명 1 설명
     * @url         : /url/{id}
     * @method      : DELETE
     * @return      : view , data , msg ...
     ************************************************************************/
    public function destroy($id) {
        try {
            $community = Community::where('id', $id)->first();                                                          // 선택된 커뮤니티
            $project_id = $community->project_id;                                                                       // 프로젝트 id
            $community->delete();                                                                                       // 선택된 커뮤니티 삭제

            return response()->json($project_id, 200, [], JSON_PRETTY_PRINT);

        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }
}
