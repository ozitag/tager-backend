<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hotel extends Model
{
    use SoftDeletes;
    protected $table = 'hotels';

    protected $fillable = ['name', 'country_id'];

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }
}
