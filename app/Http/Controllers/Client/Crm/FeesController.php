<?php

namespace App\Http\Controllers\Client\Crm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @description 수수료 정책
     * @url /fees
     * @return view
     */
    public function index()
    {
        return view('client.crm.fees.index');
    }
}
