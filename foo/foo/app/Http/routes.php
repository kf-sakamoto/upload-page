<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//データのアップロードを行うページのルート
Route::get('upload','UpLoad@index');
Route::get('upload_data.php','UpLoadDatad@index');
Route::get('/', function () {
    return view('welcome');
});
