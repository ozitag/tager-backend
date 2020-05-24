<?php

use Illuminate\Support\Facades\Route;

Route::get('/users', 'Api\Guest\UsersController@index');

Route::get('/self', 'Api\Admin\SelfController@index');
Route::post('/self/logout', 'Api\Admin\SelfController@logout');


// *********** File Upload *********** //

Route::post('/upload', 'Api\Admin\UploadController@store');

// *********** *********** *********** //
