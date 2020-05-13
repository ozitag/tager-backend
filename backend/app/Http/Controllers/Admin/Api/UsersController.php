<?php

namespace App\Http\Controllers\Admin\Api;


use App\Http\Controllers\Controller;
use App\Features\users\StoreUserFeature;
use App\Features\users\UpdateUserFeature;
use App\Http\Resources\user\UsersResource;
use App\Repositories\Eloquent\UserRepository;

class UsersController extends Controller
{
    public function index(UserRepository $repository){
        return UsersResource::collection($repository->all());
    }

    public function store(){
        return $this->serve(StoreUserFeature::class);
    }

    public function update($id, UserRepository $repository){
        $user = $repository->find($id);
        return $user ? $this->serve(UpdateUserFeature::class, [
            'user' => $user
        ]) : abort(404);
    }

    public function view($id, UserRepository $repository){
        $user = $repository->find($id);
        return $user ? new UsersResource($user) : abort(404);
    }

    public function delete($id, UserRepository $repository){
        $user = $repository->find($id);
        return $user ? $user->delete() : abort(404);
    }

}
