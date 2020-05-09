<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    protected $table = 'orders';

    protected $fillable = ['agency_id', 'file_id', 'country_id', 'hotel_id', 'datetime', 'title', 'description',
        'nights', 'adults', 'baby', 'regular_price', 'promo_price', 'to_id', 'rating'];


    public function file()
    {
        return $this->belongsTo('App\Models\File', 'file_id');
    }

    public function files()
    {
        return $this->belongsToMany('App\Models\File', 'order_files');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country', 'country_id');
    }

    public function to()
    {
        return $this->belongsTo('App\Models\Touroperator', 'to_id');
    }

    public function hotel()
    {
        return $this->belongsTo('App\Models\Hotel', 'hotel_id');
    }

    public function agency()
    {
        return $this->belongsTo('App\Models\Agency', 'agency_id');
    }

    public function scopeActive($query)
    {
        return $query->where('datetime','>', Carbon::now());
    }
}
