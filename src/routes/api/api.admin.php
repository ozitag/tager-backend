<?php

use Illuminate\Support\Facades\Route;

Route::get('/users', 'Api\Guest\UsersController@index');
Route::get('/user', 'Api\Admin\UserController@index');

Route::post('/auth/logout', 'Api\Admin\AuthController@logout');


// *********** File Upload *********** //

Route::post('/upload', 'Api\Admin\UploadController@store');

// *********** *********** *********** //
