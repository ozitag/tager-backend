<?php

use Illuminate\Support\Facades\Route;

Route::get('/guest/users', 'Api\Guest\UsersController@index');
