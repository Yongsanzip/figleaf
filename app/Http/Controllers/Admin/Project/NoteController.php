<?php

namespace App\Http\Controllers\Admin\Project;

use App\Note;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     * @description : Admin 프로젝트 - 비고 (팝업)
     * @url         : /admin_note
     * @method      : GET
     * @return      : view
     */
    public function index()
    {
        try {
            return view('admin.project.partial.note.index');
        } catch (\Exception $e){
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            flash($msg)->error();
            // return redirect(route('url'));
            return back();
        }
    }

    /**
     * Store a newly created resource in storage.
     * @description : Admin 프로젝트 - 비고 내용 저장 (팝업)
     * @url         : /admin_note
     * @method      : GET
     * @return      : script
     */
    public function store(Request $request)
    {
        try {
            Note::create([
                'project_id'            => $request->project_id,
                'user_id'               => auth()->user()->id,
                'contents'              => $request->contents
            ]);
            return redirect('/');
        } catch (\Exception $e){
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            flash($msg)->error();
            // return redirect(route('url'));
            return back();
        }
    }

}
