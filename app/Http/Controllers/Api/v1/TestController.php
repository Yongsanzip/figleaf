<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller {

    public function test1(Request $request){
        error_log("in get success111");
        error_log($request->getContent());
        error_log($request);
        echo $request->code;
        return response()->json(['msg'=>'GET success'],200,[],JSON_PRETTY_PRINT);
    }

    public function test2(Request $request){
        error_log("in post success");
        echo $request->code;
        return response()->json(['msg'=>'POST success'],200,[],JSON_PRETTY_PRINT);
    }
}
