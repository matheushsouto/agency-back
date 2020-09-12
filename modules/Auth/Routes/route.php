<?php

/**
 * Routes for user authentication.
 *
 */

Route::post('/login', 'AuthController@login')->name('login');
Route::post('/refresh', 'AuthController@refresh');
Route::get('/partner/me', 'AuthController@me');
Route::post('/logout', 'AuthController@logout');
