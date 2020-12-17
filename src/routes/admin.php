<?php

use Illuminate\Support\Facades\Route;

Route::post('/upload', [OZiTAG\Tager\Backend\Files\TagerBackendFilesController::class, 'upload']);

Route::group(['namespace' => 'App\Http\Controllers'], function () {

});
