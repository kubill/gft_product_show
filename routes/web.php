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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/products', 'IndexController@productList')->name('productList');
Route::get('/product/{id}', 'IndexController@productDetail')->name('product');
Route::get('/articles', 'IndexController@articleList')->name('articleList');
Route::get('/article/{id}', 'IndexController@articleDetail')->name('article');
Route::get('/about', 'IndexController@about')->name('about');
Route::get('/contact', 'IndexController@contact')->name('contact');
Route::post('/contact', 'IndexController@contackPost')->name('contact.post');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
