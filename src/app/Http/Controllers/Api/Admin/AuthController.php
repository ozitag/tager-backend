<?php

namespace App\Http\Controllers\Api\Admin;


use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessResource;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function logout(){
        Auth::user()->token()->revoke();
        return new SuccessResource();
    }

}
