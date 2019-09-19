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
    return view('index/index');//商品首页
});
Route::get('/register','LoginController@register');//注册
Route::post('/regdo','LoginController@regdo');#注册执行
Route::get('/login','LoginController@login');//登录页面

Route::get('/cart','CartController@cart');//购物车

Route::get('/detail','DetailController@detail');//商品详情
