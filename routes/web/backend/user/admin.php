<?php
/**
 * Created by PhpStorm
 * User: Norman
 * Date: 2023/3/27
 * Time: 10:58 AM
 */


Route::group(['namespace' => 'Backend\User', 'prefix' => config('app.backend_route_prefix'), 'middleware' => 'auth:admin'], function () {

    //客服管理
    Route::group(['prefix' => 'customer'], function () {
        Route::get('', 'AdminController@index');
        Route::get('/data', 'AdminController@data');

        // 添加
        Route::get('/create', 'AdminController@create');
        Route::post('/store', 'AdminController@store');

        // 编辑
        Route::get('/edit/{id}', 'AdminController@edit');
        Route::post('/update/{id}', 'AdminController@update');

        // 删除
        Route::delete('/destroy', 'AdminController@destroy');

    });

    //客服组管理
    Route::group(['prefix' => 'group'], function () {
        Route::get('', 'GroupController@index');
        Route::get('/data', 'GroupController@data');

        // 添加
        Route::get('/create', 'GroupController@create');
        Route::post('/store', 'GroupController@store');

        // 编辑
        Route::get('/edit/{id}', 'GroupController@edit');
        Route::post('/update/{id}', 'GroupController@update');

        // 删除
        Route::delete('/destroy', 'GroupController@destroy');

        // 启/禁状态
        Route::get('/change_status/{id}', 'GroupController@changeStatus');

    });

    //访客管理
    Route::group(['prefix' => 'guest'], function () {
        Route::get('', 'GuestController@index');
        Route::get('/data', 'GuestController@data');

        // 编辑
        Route::get('/edit/{id}', 'GuestController@edit');
        Route::post('/update/{id}', 'GuestController@update');

        // 删除
        Route::delete('/destroy', 'GuestController@destroy');

    });


});

