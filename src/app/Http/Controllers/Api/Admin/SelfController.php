<?php

namespace App\Http\Controllers\Api\Admin;


use App\Http\Controllers\Controller;
use App\Http\Resources\administrator\AdministratorResource;
use App\Http\Resources\SuccessResource;
use Illuminate\Support\Facades\Auth;

class SelfController extends Controller
{
    public function index(){
        return new AdministratorResource(Auth::user());
    }

    public function logout(){
        Auth::user()->token()->revoke();
        return new SuccessResource();
    }

}
