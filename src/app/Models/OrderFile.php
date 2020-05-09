<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderFile extends Model
{
    use SoftDeletes;
    protected $table = 'order_files';



    public function file()
    {
        return $this->belongsTo('App\Models\File');
    }

    public function order()
    {
        return $this->belongsToMany('App\Models\Order');
    }
}
