<?php

namespace App\Repositories\Eloquent\Core;

use App\Models\Core\Administrator;

class AdministratorRepository extends BaseRepository
{
    public function __construct(Administrator $model)
    {
        parent::__construct($model);
    }
}
