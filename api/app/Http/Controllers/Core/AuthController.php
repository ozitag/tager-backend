<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use App\Features\Core\LoginFeature;

class AuthController extends Controller
{
    public function login()
    {
        return $this->serve(LoginFeature::class);
    }
}
