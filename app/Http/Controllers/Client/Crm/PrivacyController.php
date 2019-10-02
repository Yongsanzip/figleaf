<?php

namespace App\Http\Controllers\Client\Crm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     * @description 개인정보처리방침
     * @url /privacy
     * @return view
     */
    public function index()
    {
        return view('client.crm.privacy.index');
    }
}
