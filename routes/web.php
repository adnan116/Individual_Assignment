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


Route::get('/', 'GenHomeController@index')->name('genHome.index');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verification');
Route::get('/logout', 'LogoutController@index');

Route::get('/register', 'RegController@index')->name('register.index');
Route::post('/register', 'RegController@register');

Route::get('/AdminHome', 'HomeController@admin')->name('home.admin')->middleware('sess');
Route::get('/AdminHome/addUser', 'HomeController@register')->name('home.register');
Route::post('/AdminHome/addUser', 'HomeController@registerDone');
Route::get('/AdminHome/userDetails', 'HomeController@userDetails')->name('home.userDetails');

Route::get('/ScoutHome', 'HomeController@scout')->name('home.scout')->middleware('sess');

Route::get('/UserHome', 'HomeController@user')->name('home.user')->middleware('sess');

