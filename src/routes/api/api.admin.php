<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', 'Api\Guest\TestController@index');

Route::get('/self', 'Api\Admin\SelfController@index');
Route::post('/self/logout', 'Api\Admin\SelfController@logout');


// *********** File Upload *********** //

Route::post('/upload', 'Api\Admin\UploadController@store');

// *********** *********** *********** //
