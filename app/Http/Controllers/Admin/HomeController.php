<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @description Admin 메인
     * @url : /admin
     * @return view
     */
    public function index()
    {
        return view('admin.index');
    }
}
