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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\HomeController;

Auth::routes();

Route::prefix('admins')->group(function () {
    Route::middleware('auth.logged')->get('login', 'Admin\AuthController@index')->name('adminLogin');
    Route::post('index', 'Admin\AuthController@login')->name('loginProcess');
    Route::get('logout', 'Admin\AuthController@logout')->name('adminLogout');
    Route::middleware('auth.admin')->get('/', 'Admin\HomeController@index')->name('indexAdmin');
    Route::middleware('auth.admin')->resource('category', 'Admin\CategoryController');
    Route::middleware('auth.admin')->resource('product', 'Admin\ProductController');
    Route::middleware('auth.admin')->resource('user', 'Admin\UserController');
    Route::middleware('auth.admin')->get('category/delete/{id}', 'Admin\CategoryController@destroy')->name('categoryDestroy');
    Route::middleware('auth.admin')->get('product/delete/{id}', 'Admin\CategoryController@destroy')->name('productDestroy');
    Route::middleware('auth.admin')->get('user/delete/{id}', 'Admin\CategoryController@destroy')->name('userDestroy');
});
Route::prefix('/')->group(function () {
    Route::get('/', 'User\HomeController@index')->name('home');
    Route::get('gaming-gear', 'User\HomeController@gaminggear')->name('gaminggear');
    Route::get('contact', 'User\HomeController@contact')->name('contact');
    Route::get('pc-component', 'User\HomeController@pccomponent')->name('pccomponent');
    Route::get('console', 'User\HomeController@console')->name('console');
    Route::get('about', 'User\HomeController@about')->name('about');
    Route::get('terms', 'User\HomeController@terms')->name('terms');
    Route::get('offer', 'User\HomeController@offer')->name('offer');
    Route::get('single/{id}', 'User\HomeController@single')->name('single');
    Route::get('faqs', 'User\HomeController@faqs')->name('faqs');
    });