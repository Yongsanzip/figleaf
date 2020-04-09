<?php

namespace App\Http\Controllers\Client\MainMenu;

use App\Category;
use App\CategoryDetail;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller {

    /************************************************************************
     * Construct
     * @description :
     ************************************************************************/
    public function __construct() {

    }

    /************************************************************************
     * Display main view
     * @description : 설명1 - 설명2
     * @url         : /url
     * @method      : GET
     * @return      : view , data , msg ...
     ************************************************************************/
    public function index(Request $request){
        try {
            $type = $request->type;
            $category_details_id = $request->category;
            if ($type == 'new') {
                $content_id = 4;
            } elseif ($type == 'special') {
                $content_id = 5;
            } elseif ($type == 'collection') {
                $content_id = 6;
            } elseif ($type == 'event') {
                $content_id = 7;
            } else {
                $content_id = 0;
            }
            $catogory_id = Category::whereCode($type)->first()->id;
            if ($content_id > 0) {                                                                                      // new, spacial, collection, event
                $datas = Project::whereIn('condition', [2,4,5])->whereHas('contentDetails', function ($q) use ($content_id) {
                    $q->where('status', 1);
                    $q->where('content_id', $content_id);
                })->orderBy('created_at','DESC')->paginate(20);
                $category_details = CategoryDetail::where('category_id', $catogory_id)->get();
            } else {                                                                                                    // women's apparel or men's apparel

                $datas = Project::whereIn('condition', [2,4,5])->where('category_id', $catogory_id);

                if ($request->category && $category_details_id != 1) { // 2차 카테고리
                    $datas = $datas->where('category2_id', $category_details_id);
                }

                $datas = $datas->orderBy('created_at','DESC')->paginate(20);
                $category_details = CategoryDetail::where('category_id', $catogory_id)->get();
            }

            return view('client.mainMenu.index',compact('datas','type', 'category_details', 'category_details_id'));
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
