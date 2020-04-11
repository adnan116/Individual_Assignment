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
Route::get('/AdminHome/addUser', 'HomeController@register')->name('home.register')->middleware('sess');
Route::post('/AdminHome/addUser', 'HomeController@registerDone')->middleware('sess');
Route::get('/AdminHome/userDetails', 'HomeController@userDetails')->name('home.userDetails')->middleware('sess');
Route::get('/AdminHome/update/{id}', 'HomeController@updateShow')->name('home.updateShow')->middleware('sess');
Route::post('/AdminHome/update/{id}', 'HomeController@updateDone');
Route::get('/AdminHome/delete/{id}', 'HomeController@deleteShow')->name('home.deleteShow')->middleware('sess');
Route::post('/AdminHome/delete/{id}', 'HomeController@deleteDone');
Route::get('/AdminHome/addCountry', 'HomeController@addCountry')->name('home.addCountry')->middleware('sess');
Route::post('/AdminHome/addCountry', 'HomeController@addCountryDone')->middleware('sess');
Route::get('/AdminHome/countryDetails', 'HomeController@countryDetails')->name('home.countryDetails')->middleware('sess');
Route::get('/AdminHome/updateCountry/{id}', 'HomeController@updateCountry')->name('home.updateCountry')->middleware('sess');
Route::post('/AdminHome/updateCountry/{id}', 'HomeController@updateCountryDone');
Route::get('/AdminHome/deleteCountry/{id}', 'HomeController@deleteCountry')->name('home.deleteCountry')->middleware('sess');
Route::post('/AdminHome/deleteCountry/{id}', 'HomeController@deleteCountryDone');
Route::get('/AdminHome/addPlace', 'HomeController@addPlace')->name('home.addPlace')->middleware('sess');
Route::post('/AdminHome/addPlace', 'HomeController@addPlaceDone')->middleware('sess');
Route::get('/AdminHome/placeDetails', 'HomeController@placeDetails')->name('home.placeDetails')->middleware('sess');
Route::get('/AdminHome/updatePlace/{id}', 'HomeController@updatePlace')->name('home.updatePlace')->middleware('sess');
Route::post('/AdminHome/updatePlace/{id}', 'HomeController@updatePlaceDone');
Route::get('/AdminHome/deletePlace/{id}', 'HomeController@deletePlace')->name('home.deletePlace')->middleware('sess');
Route::post('/AdminHome/deletePlace/{id}', 'HomeController@deletePlaceDone');
Route::get('/AdminHome/updateProfile', 'HomeController@updateProfile')->name('home.updateProfile')->middleware('sess');
Route::post('/AdminHome/updateProfile', 'HomeController@updateProfileDone');


Route::get('/ScoutHome', 'HomeController@scout')->name('home.scout')->middleware('sess');
Route::get('/ScoutHome/updateProfile', 'ScoutHomeController@updateProfile')->name('scout.updateProfile')->middleware('sess');
Route::post('/ScoutHome/updateProfile', 'ScoutHomeController@updateProfileDone');





Route::get('/UserHome', 'HomeController@user')->name('home.user')->middleware('sess');
Route::get('/UserHome/updateProfile', 'ScoutHomeController@updateProfile')->name('user.updateProfile')->middleware('sess');
Route::post('/UserHome/updateProfile', 'ScoutHomeController@updateProfileDone');
