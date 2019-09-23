<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    /**************************************************************
     * @function locale
     * @params $locale
     * @description 세션 다국어 처리
     * @return view
     **************************************************************/
    public function locale($locale)
    {
        Session::put('locale', $locale);
        return back()->withInput();
    }
}
