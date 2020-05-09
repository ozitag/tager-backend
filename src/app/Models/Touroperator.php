<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Touroperator extends Model
{
    use SoftDeletes;
    protected $table = 'touroperators';

    protected $fillable = ['name', 'description', 'file_id', 'country_id'];

    public function file()
    {
        return $this->belongsTo('App\Models\File');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }
}
