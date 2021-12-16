<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('milk','ControllerContectApi@FunMilk');

Route::post('animal','ControllerContectApi@FunAniml');

Route::post('login','ControllerContectApi@FunLogin');

 

/*

Route::middleware('auth:sanctumap')->get('/user', function (Request $request) {
    return $request->user();
});




Route::get('/users/{name?}',function($name =null){
    return 'hi ' . $name  ;
});

Route::get('/product/{id?}',function($id =null){
    return 'product id is ' . $id  ;
}) ->where('id','[0-9]+');

*/