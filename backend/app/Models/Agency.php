<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agency extends Model
{
    use SoftDeletes;
    protected $table = 'agency';

    protected $fillable = ['name', 'country_id', 'user_id', 'ownership', 'director', 'address',
        'phone', 'email'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function userOrders()
    {
        return $this->hasManyThrough('App\Models\UserOrder', 'App\Models\Order');
    }

    public function users()
    {
        return User::whereIn('id', $this->userOrders->pluck('user_id'))->get();
    }

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
}
