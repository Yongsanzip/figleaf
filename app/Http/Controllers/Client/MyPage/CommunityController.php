<?php

namespace App\Http\Controllers\Client\MyPage;

use App\Community;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     * @description 마이페이지 - 작성한 커뮤니티
     * @url /mypage_community
     * @return view
     */
    public function index()
    {
        $datas = Community::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->paginate(15);
        error_log(count($datas));
        return view('client.mypage.community.index', compact('datas'));
    }

}
