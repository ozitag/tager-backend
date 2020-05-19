<?php

namespace App\Http\Controllers\Api\Guest;


use App\Http\Controllers\Controller;
use App\Http\Resources\user\UsersApiResource;
use App\Repositories\Eloquent\AdministratorRepository;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index(AdministratorRepository $repository){
        return UsersApiResource::collection($repository->all());
    }

}
