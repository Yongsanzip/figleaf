<?php

namespace App\Http\Controllers\Client\Support;

use App\Bank;
use App\Option;
use App\Portfolio;
use App\Project;
use App\ViewProject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SupportController extends Controller
{
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
    public function index(Request $request){
        try {
            $auth_check = Auth::check();

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
            $banks = Bank::whereUseYn(1)->get();                                                                        // 은행정보
            $option_arr = array();
            for ($i = 0; $i < count($option_id); $i++) {
                $option_arr['option_id'][$i] = $option_id[$i];                                                          // 옵션 주문 id
                $option_arr['option_amount'][$i] = $request->option_amount[$i];                                         // 옵션 주문 수량
                $option = Option::find($option_id[$i]);
                $option_arr['option_name'][$i] = $option->option_name;                                                  // 옵션명
                $option_arr['option_price'][$i] = $option->price;                                                       // 옵션 가격
                $option_total_cost += $option_arr['option_amount'][$i] * $option_arr['option_price'][$i];
            }
            $SignatureUtil = new \INIStdPayUtil();                                                                      // Inisic Util
            $mid 			= env('INICIS_MARKET_ID');  								                            // 가맹점 ID(가맹점 수정후 고정)
            $signKey 		= env('INICIS_SIGN_KEY'); 			                                                    // 가맹점에 제공된 키(이니라이트키) (가맹점 수정후 고정) !!!절대!! 전문 데이터로 설정금지
            $cardNoInterestQuota = "11-2:3:,34-5:12,14-6:12:24,12-12:36,06-9:12,01-3:4";                                // 카드 무이자 여부 설정(가맹점에서 직접 설정)
            $cardQuotaBase       = "2:3:4:5:6:11:12:24:36";                                                             // 가맹점에서 사용할 할부 개월수 설정
            $timestamp 		= $SignatureUtil->getTimestamp();   			                                            // util에 의해서 자동생성
            $orderNumber 	= $mid . "_" . $timestamp; 						                                            // 가맹점 주문번호(가맹점에서 직접 설정)
            //$price = $option_total_cost;
            $price=200;
            $mKey 					= $SignatureUtil->makeHash($signKey, "sha256");
            $params = array("oid" => $orderNumber, "price" => $price, "timestamp" => $timestamp );                      // sign key
            $sign		= $SignatureUtil->makeSignature($params);                                                       // sign
            $http_host 	= $_SERVER['HTTP_HOST'];
            $siteDomain = get_connet_protocol().$_SERVER['HTTP_HOST'].'/project_support';                               //가맹점 도메인 입력
            $prevUrl = route('project.show',['id'=>$request->project_id]);                                        // 이전 페이지

            $returnData  =[
                  'data'
                , 'supporter_count'
                , 'cardNoInterestQuota'
                , 'cardQuotaBase'
                , 'total_cost'
                , 'date_diff'
                , 'portfolio'
                , 'option_id'
                , 'option_arr'
                , 'option_total_cost'
                , 'banks'
                , 'mid'
                , 'signKey'
                , 'timestamp'
                , 'orderNumber'
                ,  'mKey'
                , 'sign'
                , 'http_host'
                , 'siteDomain'
                , 'price'
                , 'prevUrl'
                , 'auth_check'
            ];

            return view('client.support.index', compact($returnData));
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    public function complete(Request $request){
        try {

            //return view('client.support.partial.complete.index');
            return view('client.support.partial.complete.returnSample');
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    public function close(){
        return view('client.support.partial.complete.close');
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
