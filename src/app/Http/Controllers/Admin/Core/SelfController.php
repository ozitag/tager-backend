<?php

namespace App\Http\Controllers\Admin\Core;

use OZiTAG\Tager\Backend\Core\Controller;
use OZiTAG\Tager\Backend\Core\SuccessResource;
use App\Http\Resources\Administrator\AdministratorResource;
use Illuminate\Support\Facades\Auth;

class SelfController extends Controller
{
    public function index()
    {
        return new AdministratorResource(Auth::user());
    }

    public function logout()
    {
        Auth::user()->token()->revoke();
        return new SuccessResource();
    }
}
