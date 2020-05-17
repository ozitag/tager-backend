<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Features\Admin\LoginFeature;

class AuthController extends Controller
{
    public function login()
    {
        return $this->serve(LoginFeature::class);
    }
}
