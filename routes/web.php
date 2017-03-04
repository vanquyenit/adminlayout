<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('admin.index');
});


Route::group(['prefix' => 'admin'], function(){
    Route::group(['prefix' => 'cate'], function(){
        Route::get('add',['as' => 'getCateAdd','uses' => 'CateController@getCateAdd']);
        Route::post('add',['as' => 'postCateAdd','uses' => 'CateController@postCateAdd']);
        Route::get('list', ['as' => 'getCateList','uses' => 'CateController@getCateList']);
        Route::get('edit/{id}', ['as' => 'getCateEdit','uses' => 'CateController@getCateEdit'])->where('id', '[0-9]+');
        Route::post('edit/{id}', ['as' => 'postCateEdit','uses' => 'CateController@postCateEdit'])->where('id', '[0-9]+');
        Route::get('delete/{id}', ['as' => 'getCateDelete','uses' => 'CateController@getCateDelete'])->where('id', '[0-9]+');
    });
});