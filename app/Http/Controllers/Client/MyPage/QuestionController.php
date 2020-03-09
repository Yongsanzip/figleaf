<?php

namespace App\Http\Controllers\Client\MyPage;

use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{

    protected $rules;

    public function __construct()
    {
        $this->rules = [
            'title'           => 'required',
            'contents'        => 'required',
        ];
    }

    /**
     * Display a listing of the resource.
     * @description 마이페이지 - 1:1 문의
     * @url /mypage_question
     * @return view
     */
    public function index()
    {
        $datas = Question::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->paginate(15);
        return view('client.mypage.question.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     * @description 마이페이지 - 1:1 문의 하기
     * @return view
     */
    public function create()
    {
        return view('client.mypage.question.partial.create.index');
    }

    /**
     * Store a newly created resource in storage.
     * @description 마이페이지 - 1:1 문의 하기 저장
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),$this->rules);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        Question::create([
            'user_id'       => auth()->user()->id,
            'title'         => $request->title,
            'content'       => $request->contents,
        ]);

        return redirect('/mypage_question');
    }

    /**
     * Display the specified resource.
     * @description 마이페이지 - 1:1 문의 보기
     * @param  int  $id
     * @return view
     */
    public function show($id)
    {
        $data = Question::find($id);
        $url = url()->previous();
        return view('client.mypage.question.partial.show.index', compact('data', 'url'));
    }

    /**
     * Show the form for editing the specified resource.
     * @description 마이페이지 - 1:1 문의 하기 수정
     * @param  int  $id
     * @return view
     */
    public function edit($id)
    {
        return view('client.mypage.question.partial.create.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @description 마이페이지 - 1:1 문의 삭제
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        error_log('delete');
        error_log($id);
        Question::where('id', $id)->delete();
        return response()->json('success', 200, [], JSON_PRETTY_PRINT);
    }
}
