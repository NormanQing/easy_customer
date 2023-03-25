<?php
/**
 * Created by PhpStorm
 * User: Norman
 * Date: 2023/3/25
 * Time: 10:55 PM
 */


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| 后台需要授权的路由 admin
|
*/
Route::group(['namespace' => 'Backend', 'prefix' => config('app.backend_route_prefix'), 'middleware' => 'auth:admin'], function () {

    //后台首页
    Route::get('', 'IndexController@index');

});
