<?php

use Illuminate\Support\Facades\Route;

Route::get('/users', 'Api\UsersController@index');
