<?php

namespace App\Repositories\Core;

use OZiTAG\Tager\Backend\Core\Repositories\EloquentRepository;
use App\Models\Core\AdminAuthLog;

class AdminAuthLogRepository extends EloquentRepository
{
    public function __construct(AdminAuthLog $model)
    {
        parent::__construct($model);
    }
}
