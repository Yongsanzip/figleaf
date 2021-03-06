<?php

namespace App\Http\Controllers\Admin\User;

use App\Question;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @description Admin 회원 - 1:1 문의
     * @url : /admin_question
     * @return view
     */
    public function index()
    {
        $datas = Question::orderBy('created_at', 'desc')->paginate(17);
        return view('admin.user.question.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * @description Admin 회원 - 1:1 문의 답변 작성
     * @url : /admin_question
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Question::where('id', $request->id)->update([
            'answer'        => $request->contents,
            'answer_yn'     => 1,
            'answer_at'     => Carbon::now()
        ]);
        return response()->json('success', 200, [], JSON_PRETTY_PRINT);
    }

    /**
     * Display the specified resource.
     * @description Admin 회원 - 1:1 문의
     * @url : /admin_question/{$id}
     * @param  int  $id
     * @return view
     */
    public function show($id)
    {
        $data = Question::find($id);
        return view('admin.user.question.partial.show.index', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
     * @description Admin 회원 - 1:1 문의 답변 삭제
     * @url : /admin_question/{$id}
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Question::where('id', $id)->update([
            'answer'            => null,
            'answer_yn'         => 0
        ]);

        return response()->json('success', 200, [], JSON_PRETTY_PRINT);
    }
}
