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
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function () {
    return view('custom.dashboard');
});

Route::get('/about', function () {
    return view('sb-admin.about');
});

Route::get('/blank', function () {
    return view('sb-admin.blank');
});

Route::get('/contact', function () {
    return view('sb-admin.contact');
});

/*
Route::get('/dashboard', function () {
return view('sb-admin.index');
});
 */
