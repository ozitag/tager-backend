<?php

namespace App\Listeners;

use App\Repositories\Core\AdminAuthLogRepository;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Request;
use Laravel\Passport\Events\AccessTokenCreated;

class AdminAuthListener implements ShouldQueue
{
    /**
     * @var AdminAuthLogRepository
     */
    private $repository;

    /**
     * Create the event listener.
     *
     * @param AdminAuthLogRepository $repository
     */
    public function __construct(AdminAuthLogRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Handle the event.
     *
     * @param AccessTokenCreated $event
     * @return void
     */
    public function handle(AccessTokenCreated $event)
    {
        $this->repository->fillAndSave([
            'administrator_id' => $event->userId,
            'ip' => Request::ip() ?? '-'
        ]);
    }
}
