<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Route::any("weixin/account/{act}.html",function($act){
  Route::callAction("AccountController@".$act);
});*/
/*Route::get("weixin/account/create.html","AccountController@create");
Route::get("weixin/account/list.html","AccountController@list");
Route::post("weixin/account/create.html","AccountController@createAccount");*/
Route::resource("weixin/account","AccountController");

Route::any('{name}.html', function ($name) {
    return view($name);
});
Route::any("{dic}/{name}.html",function($dic,$name){
  return view($dic."/".$name);
});
Route::any("{dic}/{plus}/{name}.html",function($dic,$plus,$name){
  return view($dic."/".$plus."/".$name);
});