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
    Route::get('/logout', 'Auth\LoginController@userLogout')->name('user.logout');
});

Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
    Route::get('/home', 'AdminController@index')->name('admin.panel');
    Route::get('/logout','AdminLoginController@logout')->name('admin.logout');
    Route::get('/addproduct', 'AdminController@addproduct')->name('admin.addproduct');
    Route::get('/addcategory', 'AdminController@addcategory')->name('admin.addcategory');
});

