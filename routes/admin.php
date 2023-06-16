<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin__news', 'NewsController@get');
Route::get('/admin__special_offer', 'SpecialOfferController@get');
Route::get('/admin__products', 'ProductsController@get');
Route::get('/admin__login', 'LoginController@get');
Route::get('/admin__orders', 'OrdersController@get');

Route::post('/admin__login', "LoginController@post");
Route::post('/logout', "LoginController@logout");

Route::get('/get_orders', 'OrdersController@testOrders');