<?php

namespace App\Http\Controllers\Admin\PaymentDelivery;

use Inicis;
use App\Support;
use App\SupportLog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupportController extends Controller {
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
    public function index(){
        try {
            $datas = Support::orderBy('created_at','DESC')->paginate(15);
            return view('admin.paymentDelivery.support.index',compact('datas'));
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

    /************************************************************************
     * Display edit view
     * @description : 설명1 - 설명2
     * @url         : /url/{id}/edit
     * @method      : /GET
     * @return      : view , data , msg ...
     ************************************************************************/
    public function refund(Request $request) {
        try {
            $util = new \INIStdPayUtil();
            $inicis = new Inicis();
            if(count($request->input())>0){
                foreach($request->input('support') as $data){
                    $support = null;
                    $timestamp=Carbon::now()->format('YmdHis');
                    $support = Support::find($data);
                    $response = $inicis->cancel(array(
                        "type"               =>"Refund",
                        "paymethod"          =>$support->inicis_payMethod,
                        "timestamp"          =>$timestamp,
                        "clientIp"           =>$request->getClientIp(),
                        "mid"                =>env('INICIS_MARKET_ID'),
                        "tid"                =>$support->inicis_tid,
                        "msg"                =>"개인결제취소",
                        "hashData"           =>$inicis->refundHash($support->inicis_payMethod,$timestamp,$request->getClientIp(),$support->inicis_tid),
                    ));
                    if(is_array($response)){
                        $response = json_encode($response);
                    }
                    $response = json_decode($response);
                    if($response->resultCode == 00){
                        $msg = '환불처리 되었습니다.';
                        $support->condition=12;
                        $support->save();
                        foreach($support->support_options as $option){
                            SupportLog::create([
                                'support_id' => $support->id,
                                'support_option_id' => $option->id,
                                'amount' => $option->amount,
                                'price'  => $option->option->price,
                                'condition'=>12
                            ]);
                        }

                    } else {
                        $msg = "환불이 실패되었습니다. 이니시스 관리자에서 직접확인하세요. 사유 : ".$response->resultMsg;
                        foreach($support->support_options as $option){
                            SupportLog::create([
                                'support_id' => $support->id,
                                'support_option_id' => $option->id,
                                'amount' => $option->amount,
                                'price'  => $option->option->price,
                                'condition'=>13
                            ]);
                        }
                        $support->condition=13;
                        $support->save();
                    }

                }

                return response()->json(['msg'=>$msg],200,[],JSON_PRETTY_PRINT);
            } else {

            }
        } catch (\Exception $e){
            $msg = '500 ERROR '.$e->getMessage();;
            return response()->json(['msg'=>$msg],529,[],JSON_PRETTY_PRINT);
        }


    }
}
