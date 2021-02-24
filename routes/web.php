<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/product','ProductController@index');
Route::get('/product/{product}','ProductController@show');
Route::get('/product/sort','ProductController@sort');
Route::get('/product/create','ProductController@create');

Route::get('/user','UserController@index');
Route::get('/user/{user}','UserController@show');

Route::get('/shop', 'CartController@shop')->name('shop');
Route::get('/cart', 'CartController@cart')->name('cart.index');
Route::post('/cart/add', 'CartController@add')->name('cart.store');
Route::post('/update', 'CartController@update')->name('cart.update');
Route::post('/remove', 'CartController@remove')->name('cart.remove');
Route::post('/clear', 'CartController@clear')->name('cart.clear');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
