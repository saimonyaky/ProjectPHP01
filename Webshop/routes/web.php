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

use App\Http\Controllers\HomeController;

Auth::routes();

Route::prefix('admins')->group(function () {
    Route::get('/', 'Admin\AuthController@index')->name('adminLogin');
    Route::post('index', 'Admin\AuthController@login')->name('loginProcess');
    Route::middleware('auth.admin')->get('index', 'Admin\HomeController@index')->name('indexAdmin');
    Route::resource('category', 'Admin\CategoryController');
    Route::resource('product', 'Admin\ProductController');
    Route::resource('user', 'Admin\UserController');
});
Route::prefix('/')->group(function () {
    Route::get('Trang-chu', 'User\HomeController@index');

    Route::get('login','User\HomeController@login')->name('loginUser');
    Route::get('register','User\HomeController@register')->name('registerUser');
    Route::post('register','User\HomeController@registerUser')->name('registerProcess');
    });