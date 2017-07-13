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

//Route::get('/', function () {
//    return view('home.index.index');
//});

Route::group(['namespace'=>'Home'], function () {
    Route::get('/', ['as' => 'home.index', 'uses' => 'IndexController@index']);

    //关于我
    Route::get('/about', ['as' => 'home.about', 'uses' => 'AboutController@index']);


    Route::get('/detail/{id}', ['as' => 'home.article.detail', 'uses' => 'IndexController@index']);
});