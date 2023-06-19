<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin__news', 'NewsController@get');
Route::get('/admin__special_offer', 'SpecialOfferController@get');
Route::get('/admin__products', 'ProductsController@get');
Route::get('/admin__orders', 'OrdersController@get');





Route::post('/admin__news', "NewsController@post")->name("news.send");
Route::post('/admin__special_offer', "NewsController@post")->name("special_offer.send");
Route::post('/admin__products', "ProductsController@post")->name("product.send");



Route::get('/get_orders', 'OrdersController@testOrders');