<?php

Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('login/vkontakte', 'Auth\LoginController@redirectToProvider');
Route::get('login/vkontakte/callback', 'Auth\LoginController@handleProviderCallback');
