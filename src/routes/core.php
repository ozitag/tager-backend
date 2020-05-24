<?php
use Illuminate\Support\Facades\Route;


Route::get('/test', 'Api\Guest\TestController@index');


Route::group(['prefix' => 'admin', 'middleware' => ['passport:administrators', 'auth:api']], function () {
    Route::get('/test', 'Api\Guest\TestController@index');

    Route::get('/self', 'Api\Admin\Core\SelfController@index');
    Route::post('/self/logout', 'Api\Admin\Core\SelfController@logout');
});
