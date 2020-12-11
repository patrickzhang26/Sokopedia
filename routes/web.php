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
Route::get('/search','GuestController@search')->name('guest.search');
Auth::routes();

Route::get('/role/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'user', 'middleware' => ['role:user']], function() {
    Route::get('/home','UserController@index')->name('user.home');
    Route::get('/detail/{id}','UserController@show');
    Route::get('/cart/detail','CartController@showCart')->name('user.cartdetail');
    Route::get('/history','UserController@showHistory')->name('user.history');
    Route::get('/search','UserController@search')->name('user.search');
    Route::get('/detail/cart/{id}','UserController@addCart')->name('user.addcart');
    Route::post('/cart','CartController@addItem')->name('user.cart');
    Route::post('/cart/update','CartController@update')->name('user.update');
    Route::get('/cart/checkout','CartController@checkout')->name('user.checkout');
    Route::get('/cart/{id}','CartController@delete')->name('user.delete');
});

Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
    Route::get('/home', 'AdminController@index')->name('admin.panel');
    Route::get('/addproduct', 'AdminController@addproduct1')->name('admin.addproduct1');
    Route::get('/listproduct', 'AdminController@listproduct')->name('admin.listproduct');
    Route::get('/addcategory', 'AdminController@addcategory1')->name('admin.addcategory1');
    Route::get('/listcategory', 'AdminController@listcategory')->name('admin.listcategory');
    Route::get('/listproduct/delete/{id}', 'AdminController@deleteproduct');
    Route::post('/addproduct', 'AdminController@addproduct2')->name('admin.addproduct2');
    Route::post('/addcategory', 'AdminController@addcategory2')->name('admin.addcategory2');
});

