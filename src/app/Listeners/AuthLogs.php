<?php


namespace App\Listeners;


use App\Repositories\Eloquent\AuthLogRepository;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Request;
use Laravel\Passport\Events\AccessTokenCreated;

class AuthLogs implements ShouldQueue
{
    /**
     * @var ITaskRepository
     */
    private $repository;

    /**
     * Create the event listener.
     *
     * @param AuthLogRepository $repository
     */
    public function __construct(AuthLogRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Handle the event.
     *
     * @param AccessTokenCreated $event
     * @return void
     */
    public function handle( AccessTokenCreated $event )
    {
        $this->repository->fillAndSave([
            'user_id' => $event->userId,
            'ip' => Request::ip() ?? '-'
        ]);
    }
}
