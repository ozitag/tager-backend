<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Http\Resources\user\UsersApiResource;
use App\Repositories\Eloquent\UserRepository;

class UsersController extends Controller
{
    public function index(UserRepository $repository){
        return UsersApiResource::collection($repository->all());
    }

}
