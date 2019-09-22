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
    return view('/');//商品首页
});
Route::get('/','IndexController@index');//首页

Route::get('/register','LoginController@register');//注册
Route::post('/regdo','LoginController@regdo');#注册执行
Route::get('/login','LoginController@login');//登录页面
Route::post('/logindo','LoginController@logindo');#注册登录

Route::post('/cart/cartadd','CartController@cartadd');
Route::get('/cart','CartController@cart');//购物车
Route::post('/cart/cartbuynum','CartController@cartbuynum');//更改商品数量
Route::post('/cart/total','CartController@total');//计算总价
Route::post('/cart/gettotal','CartController@gettotal');//计算小计

Route::get('/detail/{id}','DetailController@detail');//商品详情

Route::get('/order','OrderController@order');//订单
