<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'GuestController@index')->middleware('guest');

Auth::routes();

Route::get('/role/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'user', 'middleware' => ['role:user']], function() {
    Route::get('/home','UserController@index')->name('user.home');
    Route::get('/detail/{id}','UserController@show');
    Route::get('/cart','UserController@showCart')->name('user.cart');
    Route::get('/history','UserController@showHistory')->name('user.history');
});

Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
    Route::get('/home', 'AdminController@index')->name('admin.panel');
    Route::get('/addproduct', 'AdminController@addproduct')->name('admin.addproduct');
    Route::get('/listproduct', 'AdminController@listproduct')->name('admin.listproduct');
    Route::get('/addcategory', 'AdminController@addcategory')->name('admin.addcategory');
    Route::get('/listcategory', 'AdminController@listcategory')->name('admin.listcategory');    
});

