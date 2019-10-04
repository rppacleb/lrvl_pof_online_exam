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



Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('auth.login');
    });

    Route::get('/user/forgot', function () {
        return view('forgotUser');
    });

    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    });

});

Route::resource('admin/examlist', 'SubjectController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
