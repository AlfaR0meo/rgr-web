<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', 'HomeController@get');
Route::get('/news', 'NewsController@get');
Route::get('/products', 'ProductsController@get');
Route::get('/contacts', 'ContactsController@get');
Route::get('/cart', 'CartController@get');
Route::get('/instruments', 'InstrumentsController@get'); 
Route::get('/accessories', 'AccessoriesController@get');
Route::get('/feedback', 'FeedbackController@get');
Route::get('/support', 'SupportController@get');
Route::get('/location', 'LocationController@get'); 
Route::get('/map', 'MapController@get');


Route::get('/async/get_products', 'CartController@getProducts');


Route::post('/cart', 'CartController@post');
Route::post('/feedback', 'FeedbackController@post');
