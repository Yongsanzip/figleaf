<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['domain'=>config('project.api_domain'), 'namespace' =>'Api', 'as' =>'api.'] , function() {
    Route::group(['prefix' => 'v1' , 'namespace' => 'v1' , 'as' => 'v1.'] , function() {
        Route::get('/test','TestController@test1');
        Route::post('/test','TestController@test2');
    });
});
