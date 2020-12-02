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
    return view('guest.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::post('registration', 'RegistrationController@store')->name('user.register');

// Route::group(
//     [
//         'name' => 'user.',
//         'prefix' => 'user',
//     ], function () {
//         Route::get('homepage', 'UserController@index')->name('user.home');
//     }
// );
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function (){
    Route::get('/login', 'AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.panel');
    Route::get('/logout','AdminLoginController@logout')->name('admin.logout');
    Route::get('/addproduct', 'AdminController@addproduct')->name('admin.addproduct');
    Route::get('/addcategory', 'AdminController@addcategory')->name('admin.addcategory');
});

