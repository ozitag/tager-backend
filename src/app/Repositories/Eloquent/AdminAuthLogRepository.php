<?php

namespace App\Repositories\Eloquent;

use App\Models\AdminAuthLog;

class AdminAuthLogRepository extends BaseRepository
{
    public function __construct(AdminAuthLog $model)
    {
        parent::__construct($model);
    }
}
