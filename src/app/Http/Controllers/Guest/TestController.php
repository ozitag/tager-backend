<?php

namespace App\Http\Controllers\Guest;


use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessResource;

class TestController extends Controller
{
    public function index(){
        return new SuccessResource();
    }

}
