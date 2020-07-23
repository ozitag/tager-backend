<?php

use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;
use Ozerich\FileStorage\Controllers\UploadController;

Route::post('/upload', UploadController::class . '@index');

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::apiResource('users', UsersController::class);
    Route::apiResourceWithMove('users-with-move', UsersController::class);
});
