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
//Admin
Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('index', 'Dashboard\DashboardController@index')->name('index');
   Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('login');
   Route::post('login', 'Auth\AdminLoginController@login')->name('login.submit');
});
