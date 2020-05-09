<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserOrder extends Model
{
    use SoftDeletes;
    protected $table = 'user_orders';

    protected $fillable = ['user_id', 'order_id', 'adults', 'baby', 'status'];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }

}
