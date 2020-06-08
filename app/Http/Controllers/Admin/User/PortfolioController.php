<?php

namespace App\Http\Controllers\Admin\User;

use App\Portfolio;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController  extends Controller {

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
            $condition = ["name"=>'회원명',"email"=>'이메일'];
            if($request->searchCondition){
                $datas = Portfolio::whereHas('user',function($q) use($request){return $q->where($request->searchCondition,'LIKE','%'.$request->searchKeyword.'%');})->paginate(15);
            } else {
                $datas = Portfolio::orderBy('created_at','desc')->paginate(15);
            }

            return view('admin.user.portfolio.index',compact('datas','condition'));
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
            $datas = Portfolio::find($id);
            return view('admin.user.portfolio.partial.show.index',compact('datas'));
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
            $portfolio = Portfolio::find($id);
            $portfolio->hidden_yn = $request->hidden_yn;
            $portfolio->open_yn = $request->open_yn ? 1 : 0;
            $portfolio->save();

            if($portfolio->user->role_id < 2){
                User::find($portfolio->user->id)->update(['role_id'=>2]);
            }
            return redirect(route('admin_portfolio.show' ,['id'=>$id]));
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }
    /************************************************************************
     * Check
     * @description : 설명1 - 설명2
     * @url         : /url/{id}
     * @method      : PUT
     * @return      : view , data , msg ...
     ************************************************************************/
    public function check_designer(Request $request){
        try {
            $user = User::whereUserCode($request->code)->first();
            if($user->role_id == 1){
                $msg = 'normal';
            } else if($user->role_id ==2){
                $msg = 'designer';
            }
            return response()->json(['msg'=>$msg],200,[],JSON_PRETTY_PRINT);
        } catch (\Exception $e){
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            return response()->json(['msg'=>$msg],522,[],JSON_PRETTY_PRINT);
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
