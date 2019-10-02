<?php

namespace App\Http\Controllers\Client\Crm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     * @description 서비스 소개
     * @url /notice
     * @return view
     */
    public function index()
    {
        return view('client.crm.service.index');
    }
}
