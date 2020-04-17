<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use App\Question;
use App\Support;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller {

    /************************************************************************
     * Construct
     * @description :
     ************************************************************************/
    public function __construct() {
        $this->middleware('auth');
    }

    /************************************************************************
     * Display main view
     * @description : 설명1 - 설명2
     * @url         : /url
     * @method      : GET
     * @return      : view , data , msg ...
     ************************************************************************/
    public function index(){
//        try {
            $now = Carbon::now();
            $today = $now->format('Y-m-d');
            $project_1 = Project::where('condition', 1)->get();                                                                  // 대기중
            $project_2 = Project::where('condition', 2)->get();                                                                  // 진행중
            $supports = Support::where('created_at', '>=', $today.' 00:00:00')->where('created_at', '<=', $today.' 59:59:59')->get();    // 오늘 하루 펀딩 참여
            $users = User::where('created_at', '>=', $today.' 00:00:00')->where('created_at', '<=', $today.' 59:59:59')->get();          // 오늘 가입한 유저
            $questions = Question::where('created_at', '>=', $today.' 00:00:00')->where('created_at', '<=', $today.' 59:59:59')->get();  // 오늘 1:1 문의

            return view('admin.index', compact('project_1', 'project_2', 'supports', 'users', 'questions', 'now'));
//        } catch (\Exception $e){
//            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
//            $title = '500 ERROR';
//            return view('errors.error',compact('description','title'));
//        }
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
     * @description : 설명1 - 설명2
     * @url         : /url
     * @method      : POST
     * @return      : view , data , msg ...
     ************************************************************************/
    public function store(Request $request){
        try {

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
     * @description : 설명1 - 설명2
     * @url         : /url/{id}
     * @method      : PUT
     * @return      : view , data , msg ...
     ************************************************************************/
    public function update(Request $request, $id){
        try {

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

        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }
}
