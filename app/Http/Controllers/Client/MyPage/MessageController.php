<?php

namespace App\Http\Controllers\Client\MyPage;

use App\Message;
use App\MessageDetail;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller{

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
        try {
            if(auth()->user()->is_designer()){
                $datas = Message::where('project_user_id','=',auth()->user()->id)->get();
            } else {
                $datas = Message::where('user_id','=',auth()->user()->id)->get();
            }

            return view('client.mypage.message.index',compact('datas'));
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
            if(Auth::check()){
                $project = Project::find($request->project);
                $message = Message::firstOrCreate([
                    'project_id'=>$project->id,
                    'project_user_id'=>$project->user_id,
                    'user_id'=>auth()->user()->id,
                ]);
                $detail = MessageDetail::create([
                    'message_id'=>$message->id,
                    'user_id'=>auth()->user()->id,
                    'content'=>$request->contents,
                ]);
                $msg = '메시지를 전송했습니다.';
                $code = 1;
            } else {
                $msg = '로그인 후 이용해주세요.';
                $code = 999;
            }

            return response()->json(['msg'=>$msg,'code'=>$code],200,[],JSON_PRETTY_PRINT);
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return response()->json(['msg' =>$title.' / '.$description],200,[],JSON_PRETTY_PRINT);
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
        $datas = MessageDetail::whereMessageId($id)->whereDate('created_at',\Carbon\Carbon::today())->get();
        $project = Project::find(Message::find($id)->project_id);
        $last_id = MessageDetail::whereMessageId($id)->orderBy('created_at','DESC')->first()->id;
        return view('client.mypage.message.partial.show.index',compact('datas','project','id'));
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
            $msg = '';
            $detail = MessageDetail::create([
                'message_id'=>$id,
                'user_id'=>auth()->user()->id,
                'content'=>$request->contents,
            ]);
            $code = 1;
            $datas = MessageDetail::whereMessageId($id)->where('id','>',$request->last_id)->whereDate('created_at',\Carbon\Carbon::today())->get();
            $id=$detail->id;

            $view = view('client.mypage.message.partial.detail', compact('datas'))->render();
            return response()->json(['html'=>$view,'code'=>$code,'last_id'=>$id],200,[],JSON_PRETTY_PRINT);
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    public function message_render(Request $request){
            $datas = MessageDetail::whereMessageId($request->message)->where('id','>',$request->last_id)->whereDate('created_at',\Carbon\Carbon::today())->orderBy('created_at',"DESC")->get();
            if($datas->count() >0){
                $code = 1;
                $id = $datas->first()->id;
                $view = view('client.mypage.message.partial.detail', compact('datas'))->render();
            } else {
                $code =0;
                $view ='';
                $id = '';
            }

            return response()->json(['html'=>$view,'code'=>$code,'last_id'=>$id],200,[],JSON_PRETTY_PRINT);
    }

}
