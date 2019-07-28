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

require_once __DIR__ . DIRECTORY_SEPARATOR . 'web/accounts.php';

Route::get('/', function () {
    return view('app', ['user' => auth()->user()]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'UserController@profile');
    /* ->middleware('verified'); */


require_once __DIR__ . DIRECTORY_SEPARATOR . 'socialite.php';
