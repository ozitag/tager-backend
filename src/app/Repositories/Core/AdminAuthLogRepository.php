<?php

namespace App\Repositories\Core;

use App\Models\Core\AdminAuthLog;
use App\Repositories\Base\BaseRepository;

class AdminAuthLogRepository extends BaseRepository
{
    public function __construct(AdminAuthLog $model)
    {
        parent::__construct($model);
    }
}
