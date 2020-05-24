<?php
use Illuminate\Support\Facades\Route;


Route::get('/test', 'Guest\TestController@index');


Route::group(['prefix' => 'admin', 'middleware' => ['passport:administrators', 'auth:api']], function () {
    Route::get('/test', 'Guest\TestController@index');

    Route::get('/self', 'Admin\Core\SelfController@index');
    Route::post('/self/logout', 'Admin\Core\SelfController@logout');
});
