<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller {

    public function test1(Request $request){
        return response()->json(['msg'=>'GET success'],200,[],JSON_PRETTY_PRINT);
    }

    public function test2(){
        return response()->json(['msg'=>'POST success'],200,[],JSON_PRETTY_PRINT);
    }
}
