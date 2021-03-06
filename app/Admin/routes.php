<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('brand', BrandController::class);   //商品品牌

    $router->resource('category', CategoryController::class);    //商品分类
    $router->resource('goods', GoodsController::class);   //商品管理
});
