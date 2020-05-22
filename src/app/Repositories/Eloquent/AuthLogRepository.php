<?php

namespace App\Repositories\Eloquent;

use App\Models\AuthLog;

class AuthLogRepository extends BaseRepository
{
    public function __construct(AuthLog $model)
    {
        parent::__construct($model);
    }
}
