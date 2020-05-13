<?php
namespace App\Repositories\Eloquent;

use App\Models\File;

class FileRepository extends BaseRepository
{
    public function __construct(File $model)
    {
        parent::__construct($model);
    }
}
