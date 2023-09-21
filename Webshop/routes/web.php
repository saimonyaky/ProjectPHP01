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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

Route::prefix('admins')->group(function () {
    Route::get('/', 'Admin\HomeController@index')->name('indexAdmin');
    Route::resource('/category', 'Admin\CategoryController');
    Route::resource('/product', 'Admin\ProductController');
    Route::resource('/user', 'Admin\UserController');
});
Route::prefix('/')->group(function () {
    Route::get('Trang-chu', 'User\HomeController@index');

    });
