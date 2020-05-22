<?php

namespace App\Http\Controllers\Api\Admin;


use App\Http\Controllers\Controller;
use App\Http\Resources\administrator\AdministratorResource;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return new AdministratorResource(Auth::user());
    }

}
