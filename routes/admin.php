<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/

Route::group([], function () {
    Route::get('/', ['as' => 'admin.index', 'uses' => 'IndexController@index']);
    Route::get('/img', ['as' => 'admin.img', 'uses' => 'ImgController@index']);
});
