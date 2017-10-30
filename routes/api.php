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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/create-contract','APIController@createContract');

Route::get('/create-contract','APIController@viewCreateContract');

Route::POST('/feature-contract','APIController@featureContract');
Route::get  ('/feature-contract','APIController@viewFeatureContract');

Route::POST('/test-param','APIController@testParam');