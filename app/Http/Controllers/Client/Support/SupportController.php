<?php

namespace App\Http\Controllers\Client\Support;

use App\Option;
use App\Portfolio;
use App\Project;
use App\ViewProject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupportController extends Controller
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
     * @url         : /url
     * @method      : GET
     * @return      : view , data , msg ...
     ************************************************************************/
    public function index(Request $request){
        try {
            $option_id = $request->option_id;
            $option_amount = $request->option_amount;
            $option_total_cost = 0;

            $support = ViewProject::where('id', $request->project_id)->first();                                         // 뷰프로젝트 데이터
            $supporter_count = $support->supporter_count;                                                               // 후원자 수
            $total_cost = $support->total_cost;                                                                         // 모인금액
            $data = Project::where('id', $request->project_id)->first();                                                // 프로젝트 데이터
            $portfolio = Portfolio::where('user_id', $data->user_id)->first();                                          // 포트폴리오 데이터

            $date_diff = ceil((strtotime($data->deadline) - strtotime("now"))/(60*60 *24));                 // 남은시간 (남은 일자)
            $data = Project::where('id',$request->project_id)->first();                                                 // 프로젝트 데이터
            $option_arr = array();
            for ($i = 0; $i < count($option_id); $i++) {
                $option_arr['option_id'][$i] = $option_id[$i];                                                          // 옵션 주문 id
                $option_arr['option_amount'][$i] = $request->option_amount[$i];                                         // 옵션 주문 수량
                $option = Option::find($option_id[$i]);
                $option_arr['option_name'][$i] = $option->option_name;                                                  // 옵션명
                $option_arr['option_price'][$i] = $option->price;                                                       // 옵션 가격
                $option_total_cost += $option_arr['option_amount'][$i] * $option_arr['option_price'][$i];
            }


            return view('client.support.index', compact('data', 'supporter_count', 'total_cost', 'date_diff', 'portfolio', 'option_id', 'option_arr', 'option_total_cost'));
        } catch (\Exception $e){
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            flash($msg)->error();
            // return redirect(route('url'));
            return back();
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
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            flash($msg)->error();
            // return redirect(route('url'));
            return back();
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
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            flash($msg)->error();
            // return redirect(route('url'));
            return back();
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
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            flash($msg)->error();
            // return redirect(route('url'));
            return back();
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
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            flash($msg)->error();
            // return redirect(route('url'));
            return back();
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
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            flash($msg)->error();
            // return redirect(route('url'));
            return back();
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
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            flash($msg)->error();
            // return redirect(route('url'));
            return back();
        }
    }
}
