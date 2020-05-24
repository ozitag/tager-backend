<?php

namespace App\Repositories\Eloquent\Core;

use App\Models\Core\AdminAuthLog;

class AdminAuthLogRepository extends BaseRepository
{
    public function __construct(AdminAuthLog $model)
    {
        parent::__construct($model);
    }
}
