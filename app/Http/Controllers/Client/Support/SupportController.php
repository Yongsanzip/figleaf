<?php

namespace App\Http\Controllers\Client\Support;

use App\Bank;
use App\Option;
use App\Portfolio;
use App\Project;
use App\Support;
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

            $option_id                  = $request->option_id;
            $option_amount              = $request->option_amount;
            $option_total_cost          = 0;

            $support                    = ViewProject::where('id', $request->project_id)->first();                      // 뷰프로젝트 데이터
            $supporter_count            = $support ? $support->supporter_count : 0;                    // 후원자 수
            $total_cost                 = $support ? $support->total_cost : 0;                              // 모인금액
            $data                       = Project::where('id', $request->project_id)->first();                          // 프로젝트 데이터
            $portfolio                  = Portfolio::where('user_id', $data->user_id)->first();                         // 포트폴리오 데이터

            $date_diff                  = ceil((strtotime($data->deadline) - strtotime("now"))/(60*60 *24));// 남은시간 (남은 일자)
            $data                       = Project::where('id',$request->project_id)->first();                           // 프로젝트 데이터
            $banks                      = Bank::whereUseYn(1)->get();                                                   // 은행정보
            $option_arr = array();
            for ($i = 0; $i < count($option_id); $i++) {
                $option_arr['option_id'][$i] = $option_id[$i];                                                          // 옵션 주문 id
                $option_arr['option_amount'][$i] = $request->option_amount[$i];                                         // 옵션 주문 수량
                $option = Option::find($option_id[$i]);
                $option_arr['option_name'][$i] = $option->option_name;                                                  // 옵션명
                $option_arr['option_price'][$i] = $option->price;                                                       // 옵션 가격
                $option_total_cost += $option_arr['option_amount'][$i] * $option_arr['option_price'][$i];
            }
            $prevUrl                    = route('project.show',['id'=>$request->project_id]);                     // 이전 페이지
            $last_support_id = Support::orderBy('id','DESC')->first() ? Support::orderBy('created_at','DESC')->first()->id : 1;
            $support = Support::firstOrCreate([
                'user_id'        =>auth()->user()->id,
                'project_id'     =>$request->project_id,
                'total_amount'   =>$option_total_cost,
                'supporter'      =>auth()->user()->name,
                'phone'          =>auth()->user()->cellphone,
                'email'          =>auth()->user()->email,
                'condition'      =>0,
            ]);
            $support->support_code ='SP_'.$last_support_id.'_PJ_'.$request->project_id.'_'.date('YmdHis');
            $support->save();

            $returnData  =[
                  'data'
                , 'supporter_count'
                , 'total_cost'
                , 'date_diff'
                , 'portfolio'
                , 'option_id'
                , 'option_arr'
                , 'option_total_cost'
                , 'banks'
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

    public function order_create(Request $request){
        try {

            $support = Support::whereSupportCode($request->code)->first();

            if(!isset($support)){
                $msg ='주문내역이 존재하지 않습니다.';
                return response()->json(['msg'=>$msg],'219',[], JSON_PRETTY_PRINT);

            }  else {
                if($support->total_amount != $request->price){
                    $msg ='요청하신 금액와 주문금액이 일치하지 않습니다..';
                    return response()->json(['msg'=>$msg],'219',[], JSON_PRETTY_PRINT);
                }

                $SignatureUtil              = new \INIStdPayUtil();                                                         // Inisic Util
                $returnData = [];
                //$pirce = $support->total_amount;
                $timestamp = $SignatureUtil->getTimestamp();
                $returnData['mid']                 = env('INICIS_MARKET_ID');  								                                        // 가맹점 ID(가맹점 수정후 고정)
                $returnData['signKey']             = env('INICIS_SIGN_KEY'); 			                                                                // 가맹점에 제공된 키(이니라이트키) (가맹점 수정후 고정) !!!절대!! 전문 데이터로 설정금지
                $returnData['cardNoInterestQuota'] = "11-2:3:,34-5:12,14-6:12:24,12-12:36,06-9:12,01-3:4";                                                  // 카드 무이자 여부 설정(가맹점에서 직접 설정)
                $returnData['cardQuotaBase']       = "2:3:4:5:6:11:12:24:36";                                                                               // 가맹점에서 사용할 할부 개월수 설정
                $returnData['timestamp']           = $timestamp;   			                                                                                // util에 의해서 자동생성
                $returnData['orderNumber']         = $support->support_code; 						                                                        // 가맹점 주문번호(가맹점에서 직접 설정)
                $returnData['price']               = 200;
                $returnData['mKey']	               = $SignatureUtil->makeHash(env('INICIS_SIGN_KEY'), "sha256");
                $returnData['params']              = array("oid" => $support->support_code, "price" => $support->total_amount, "timestamp" => $timestamp );  // sign key
                $returnData['sign']                = $SignatureUtil->makeSignature($returnData['params']);                                                   // sign
                $returnData['http_host']           = $_SERVER['HTTP_HOST'];
                $returnData['siteDomain']          = get_connet_protocol().$_SERVER['HTTP_HOST'].'/project_support';                                         //가맹점 도메인 입력



                $msg = 'success';
                return response()->json(['msg'=>$msg,'returnData'=>json_encode($returnData)],201,[],JSON_PRETTY_PRINT);

            }

        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR ';
            $msg = $title.$description;
            return response()->json(['msg'=>$msg],500,[],JSON_PRETTY_PRINT);
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
