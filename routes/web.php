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

/*Route::get('/', function () {
return view('signin');
});
 */

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/blank', 'HomeController@blank')->name('blank');
Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/profile/edit', 'ProfilesTestController@edit');
Route::resource('profile', 'ProfilesTestController')->except(['edit']);

Route::get('/manage/pending', 'ManageController@pending')->name('pending');
Route::get('/manage/history', 'ManageController@history')->name('history');
Route::get('/manage/allusers', 'ManageController@allUser')->name('allusers');
