<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Features\auth\LoginFeature;

class AuthController extends Controller
{
    public function login(){
        return $this->serve(LoginFeature::class);
    }
}
