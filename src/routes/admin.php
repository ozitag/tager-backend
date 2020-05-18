<?php

use Illuminate\Support\Facades\Route;

Route::get('/{any?}', 'Admin\EndpointController@index')->where('any', '.*');;
