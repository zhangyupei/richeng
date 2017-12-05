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

Route::get('/', function () {
    return view('welcome');
});

Route::get('show','DemoController@show');
Route::get('jdjg_add','DemoController@jdjg_add');
Route::get('del','DemoController@del');
Route::get('redis','DemoController@redis');
