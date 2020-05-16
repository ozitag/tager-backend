<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', 'TestController@index');
Route::post('/admin/auth', 'Admin\AuthController@login');

//Route::get('/admin/{any?}', 'EndpointController@index')->where('any', '.*');;
