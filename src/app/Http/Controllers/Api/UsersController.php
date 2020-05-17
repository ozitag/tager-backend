<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Http\Resources\user\UsersApiResource;
use App\Jobs\Queues\TestQueueJob;
use App\Repositories\Eloquent\AdministratorRepository;

class UsersController extends Controller
{
    public function index(AdministratorRepository $repository){

        dispatch(new TestQueueJob())->delay(5);
        return UsersApiResource::collection($repository->all());
    }

}
