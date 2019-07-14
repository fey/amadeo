<?php

Route::group(
    [
    'prefix' => 'accounts',
    'middleware' => [],
    ],
    static function () {
        Route::get('', 'AccountController@index');
        Route::post('', 'AccountController@store')->name('accounts.create');
        Route::get('new', 'AccountController@new')->name('accounts.new');
        Route::get('{account}', 'AccountController@show');
        Route::get('/accounts', 'AccountController@index');
    }
);
