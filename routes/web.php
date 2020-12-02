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

Route::get('/', function () {
    return view('admin.panel');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::post('registration', 'RegistrationController@store')->name('user.register');

Route::prefix('admin')->group(function (){
    Route::get('/login', 'AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AdminLoginController@Login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.panel');
    Route::get('/addproduct', 'AdminController@addproduct')->name('admin.addproduct');
    Route::get('/addcategory', 'AdminController@addcategory')->name('admin.addcategory');
});

