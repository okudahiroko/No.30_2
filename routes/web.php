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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('booking/apply', 'Admin\bookingController@add');
    Route::post('booking/apply', 'Admin\bookingController@apply');
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
