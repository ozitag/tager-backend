<?php

namespace App\Repositories\Core;

use OZiTAG\Tager\Backend\Core\Repositories\EloquentRepository;
use App\Models\Core\Administrator;

class AdministratorRepository extends EloquentRepository
{
    public function __construct(Administrator $model)
    {
        parent::__construct($model);
    }
}
