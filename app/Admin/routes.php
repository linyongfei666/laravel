<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
<<<<<<< HEAD
    $router->resource('brand', BrandController::class);   //商品品牌
<<<<<<< HEAD
=======

>>>>>>> hs-dev
=======
    $router->resource('category', CategoryController::class);    //商品分类
    $router->resource('goods', GoodsController::class);   //商品管理
>>>>>>> 4d0c7698d2128fcccc3b4532de2b81f300c015d7
});
