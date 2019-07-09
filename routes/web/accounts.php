<?php

Route::group(
    [
    'prefix' => 'accounts',
    'middleware' => [],
    ],
    static function () {
        Route::post('', 'AccountController@store');
        Route::get('{account}', 'AccountController@show');
        Route::get('', 'AccountController@index');
    }
);
