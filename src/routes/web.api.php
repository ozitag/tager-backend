<?php

use Illuminate\Support\Facades\Route;

//Route::get('/users', 'Admin\Api\UsersController@index');
//Route::post('/users ', 'Admin\Api\UsersController@store');
//Route::get('/users/{id}', 'Admin\Api\UsersController@view');
//Route::put('/users/{id}', 'Admin\Api\UsersController@update');
//Route::delete('/users/{id}', 'Admin\Api\UsersController@delete');

// *********** File Upload *********** //

Route::post('/upload', 'Api\Admin\UploadController@store');

// *********** *********** *********** //
