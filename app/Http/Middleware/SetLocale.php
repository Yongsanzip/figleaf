<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**************************************************************
     * @function handle
     * @params $request ,Closure  $next
     * @description 세션 다국어 처리
     * @return mixed
     **************************************************************/
    public function handle($request, Closure $next) {
        if(Session::has('locale'))
        {
            App::setlocale(Session::get('locale'));
        }
        return $next($request);
    }
}
