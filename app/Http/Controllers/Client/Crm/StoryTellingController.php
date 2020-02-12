<?php

namespace App\Http\Controllers\Client\Crm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoryTellingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @description 스토리텔링 작성가이드 (팝업창)
     * @url /story_telling
     * @return view
     */
    public function index()
    {
        // return view('client.crm.storyTelling.index');
        return view('client.project.partial.popup.storytelling');
    }
}
