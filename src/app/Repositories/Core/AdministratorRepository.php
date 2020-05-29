<?php

namespace App\Repositories\Core;

use App\Models\Core\Administrator;
use App\Repositories\Base\BaseRepository;

class AdministratorRepository extends BaseRepository
{
    public function __construct(Administrator $model)
    {
        parent::__construct($model);
    }
}
