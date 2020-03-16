<?php

namespace App\Http\Controllers\Client\Support;

use App\Bank;
use App\Option;
use App\Portfolio;
use App\Project;
use App\Support;
use App\SupportLog;
use App\User;
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
            $banks                      = Bank::whereUseYn(1)->get();

            $last_support_id = Support::orderBy('id','DESC')->first() ? Support::orderBy('created_at','DESC')->first()->id : 1;

            $option_arr = array();
            for ($i = 0; $i < count($option_id); $i++) {
                $option_arr['option_id'][$i] = $option_id[$i];                                                          // 옵션 주문 id
                $option_arr['option_amount'][$i] = $request->option_amount[$i];                                         // 옵션 주문 수량
                $option = Option::find($option_id[$i]);
                $option_arr['option_name'][$i] = $option->option_name;                                                  // 옵션명
                $option_arr['option_price'][$i] = $option->price;                                                       // 옵션 가격
                $option_total_cost += $option_arr['option_amount'][$i] * $option_arr['option_price'][$i];
                if(!session()->get('chk')){
                    $log = SupportLog::firstOrCreate([
                        'support_option_id'   =>$option_arr['option_id'][$i],
                        'amount'              =>$request->option_amount[$i],
                        'price'               =>$option->price,
                        'condition'           =>0,
                    ]);
                }
            }
            $support = Support::firstOrCreate([
                'user_id'        =>auth()->user()->id,
                'project_id'     =>$request->project_id,
                'supporter'      =>auth()->user()->name,
                'total_amount'   =>$option_total_cost,
                'phone'          =>auth()->user()->cellphone,
                'email'          =>auth()->user()->email,
                'condition'      =>0,
            ]);
            $log->support_id = $support->id;
            $log->save();
            if(!isset($support->support_code)){
                $support->support_code ='SP_'.$last_support_id.'_PJ_'.$request->project_id.'_'.date('YmdHis');
                $support->save();                                                                                           // 은행정보

            }
            $prevUrl                    = route('project.show',['id'=>$request->project_id]);                     // 이전 페이지

            $returnData  =[
                  'data'
                , 'support'
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
            $support = Support::whereSupportCode($request->support_code)->first();
            if(!isset($support)){
                $msg ='주문내역이 존재하지 않습니다.';
                return response()->json(['msg'=>$msg],'219',[], JSON_PRETTY_PRINT);

            }  else {
                if($support->total_amount != $request->price){
                    $msg ='요청하신 금액와 주문금액이 일치하지 않습니다..';
                    return response()->json(['msg'=>$msg],'219',[], JSON_PRETTY_PRINT);
                }

                $support->receiver                   =$request->receiver;
                $support->receiver_phone             =$request->receiver_phone;
                $support->zipcode                    =$request->zipcode;
                $support->address                    =$request->address;
                $support->address_detail             =$request->address_detail;
                $support->requirement                =$request->requirement;
                $support->save();

                if($request->bank_id){
                    $user = User::find(auth()->user()->id)->first();
                    $user->bank_id                    =$request->bank_id;
                    $user->bank_account_holder        =$request->bank_account_holder;
                    $user->bank_account_number        =$request->bank_account_number;
                    $user->save();
                }



                $SignatureUtil              = new \INIStdPayUtil();                                                         // Inisic Util
                $returnData = [];
                //$pirce = $support->total_amount;
                $timestamp  = $SignatureUtil->getTimestamp();
                $siteDomain =get_connet_protocol().$_SERVER['HTTP_HOST'].'/project_support';

                $returnData['version']              =  "1.0";                                                               // 버전
                $returnData['mid']                  =  env('INICIS_MARKET_ID');                                        // 가맹점 ID(가맹점 수정후 고정)
                $returnData['cardNoInterestQuota']  = "11-2:3:,34-5:12,14-6:12:24,12-12:36,06-9:12,01-3:4";                 // 카드 무이자 여부 설정(가맹점에서 직접 설정)
                $returnData['cardQuotaBase']        = "2:3:4:5:6:11:12:24:36";                                              // 가맹점에서 사용할 할부 개월수 설정
                $returnData['goodname']             =  $support->project->title;                                            // 상품명
                $returnData['oid']                  =  $support->support_code;                                              // 후원번호
                $returnData['price']                =  $support->total_amount;                                            // 후원총액
                $returnData['currency']             =  "WON";                                                               // 화폐단위
                $returnData['buyername']            =  auth()->user()->name;                                                // 구매자명
                $returnData['buyertel']             =  auth()->user()->cellphone;                                           // 구매자전화번호
                $returnData['buyeremail']           =  auth()->user()->email;                                               // 구매자이메일
                $returnData['timestamp']            =  $timestamp;                                                          // 시간
                $returnData['signature']            =  $SignatureUtil->makeSignature(array("oid" => $support->support_code  // 시그니처
                                                                                         , "price" => $support->total_amount//
                                                                                         , "timestamp" => $timestamp ));    //
                $returnData['returnUrl']            =  $siteDomain.'/complete';                                             // returnUrl 결제후 갈 URL
                $returnData['mKey']                 =  $SignatureUtil->makeHash(env('INICIS_SIGN_KEY'), "sha256"); // mKey
                $returnData['gopaymethod']          =  "";                                                                  //
                $returnData['acceptmethod']         =  "HPP(1):no_receipt:va_receipt:vbanknoreg(0):below1000";              // 플러그인 모드 (이니시스 가이드참고)
                $returnData['billPrint_ms']         =  "";                                                                  // 결제 메세지
                $returnData['languageView']         =  "ko";                                                                // 언어
                $returnData['charset']              =  "UTF-8";                                                             // utf-8이기본
                $returnData['payViewType']          =  "overlay";                                                           // popup ,overlay
                $returnData['closeUrl']             =  $siteDomain.'/close';                                                // 닫기URL
                $returnData['merchantData']         =  "";                                                                  //
                session()->forget('chk');
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

    public function inicis_complete(Request $request){
        try {
            if($request->resultCode =='0000'){
                $support = Support::whereSupportCode($request->orderNumber)->first();
                $support->condition = 2;
                $support->save();

                $logs = SupportLog::whereSupportId($support->id)->get();
                foreach($logs as $log){
                    SupportLog::firstOrCreate([
                        'support_id'          => $support->id,
                        'support_option_id'   =>$log->support_option_id,
                        'amount'              =>$log->ammount,
                        'price'               =>$log->price,
                        'condition'           =>2,
                    ]);
                }
            }
            return redirect(route('complete.get',['orderNumber'=>$request->orderNumber]));
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    public function order_complete(Request $request){
        try {
            error_log("check");
            $support = Support::whereSupportCode($request->orderNumber)->first();
            return view('client.support.partial.complete.index',compact('support'));
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
