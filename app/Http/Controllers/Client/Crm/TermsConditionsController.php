<?php

namespace App\Http\Controllers\Client\Crm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TermsConditionsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @description 회원가입 약관
     * @url /terms
     * @return view
     */
    public function index()
    {
        return view('client.crm.termsConditions.index');
    }
}
