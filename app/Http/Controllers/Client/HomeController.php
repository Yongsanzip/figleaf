<?php

namespace App\Http\Controllers\Client;

use App\Portfolio;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @description 메인
     * @url : /
     * @return view
     */
    public function index() {
        var_dump(1);
        $designer = Portfolio::where('hidden_yn', 1)->where('open_yn', 1)->whereHas('contentDetails', function ($q) {   // 디자이너 - 포트폴리오
            $q->where('status', 0);
            $q->where('content_id', 1);
        })->orderBy('created_at', 'desc')->limit(8)->get();

        $brand = Portfolio::where('hidden_yn', 1)->where('open_yn', 1)->whereHas('contentDetails', function ($q) {      // 브랜드 - 포트폴리오
            $q->where('status', 0);
            $q->where('content_id', 2);
            $q->where('hidden_yn', 1);
        })->orderBy('created_at', 'desc')->limit(8)->get();

        $project = Project::whereIn('condition', [2,4,5])->whereHas('contentDetails', function ($q) {                                                  // 프로젝트  - 프로젝트
           $q->where('status', 1);
           $q->where('content_id', 3);
        })->orderBy('created_at', 'desc')->limit(8)->get();

        $new_project = Project::whereIn('condition', [2,4,5])->orderBy('created_at', 'desc')->limit(8)->get();                                         // 뉴프로젝트 - 프로젝트

        return view('client.index', compact('designer', 'brand', 'project', 'new_project'));
    }
}
