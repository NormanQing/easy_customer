<?php
/**
 * Created by PhpStorm
 * User: Norman
 * Date: 2023/3/24
 * Time: 11:52 PM
 */

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

Route::group(['prefix' => config('app.backend_route_prefix'), 'namespace' => 'Backend'], function () {
    Route::get('/login', 'LoginController@loginForm');     //登录表单
    Route::post('/login', 'LoginController@login');        //登录
    Route::get('/logout', 'LoginController@logout');       //退出

});




