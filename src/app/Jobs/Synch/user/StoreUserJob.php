<?php


namespace App\Jobs\Synch\user;


use App\Repositories\Eloquent\UserRepository;

class StoreUserJob
{
    private $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function handle(UserRepository $repository){
        return $repository->fillAndSave($this->request->getData());
    }
}
