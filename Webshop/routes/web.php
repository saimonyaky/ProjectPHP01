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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admins', 'AdminController@index')->name('admins');
Route::get('/category', 'CategoryController@index')->name('category');
Route::get('/product', 'ProductController@index')->name('product');
Route::get('/user', 'UserController@index')->name('user');
