<?php

namespace App\Http\Controllers\Client\Crm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DelayController extends Controller
{
    /**
     * Display a listing of the resource.
     * @description 배송지연관련 정책 (팝업창)
     * @url /delay
     * @return view
     */
    public function index()
    {
        return view('client.crm.delay.index');
    }
}
