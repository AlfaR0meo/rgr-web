<?php

use Illuminate\Support\Facades\Route;

Route::get('/news', 'NewsController@get');
Route::get('/special_offer', 'SpecialOfferController@get');
Route::get('/products', 'ProductsController@get');
Route::get('/contacts', 'ContactsController@get');
Route::get('/pages', 'PagesController@get'); 
Route::get('/login', 'LoginController@get');