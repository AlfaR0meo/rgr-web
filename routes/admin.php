<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin__news', 'NewsController@get');
Route::get('/admin__special_offer', 'SpecialOfferController@get');
Route::get('/admin__products', 'ProductsController@get');
Route::get('/admin__contacts', 'ContactsController@get');
Route::get('/admin__pages', 'PagesController@get'); 
Route::get('/admin__login', 'LoginController@get');