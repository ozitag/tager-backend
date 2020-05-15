<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', 'TestController@index');;
Route::post('/auth', 'Core\AuthController@login');;

//Route::get('/admin/{any?}', 'EndpointController@index')->where('any', '.*');;
