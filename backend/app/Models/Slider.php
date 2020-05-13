<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use SoftDeletes;
    protected $table = 'sliders';

    protected $fillable = ['category_id', 'file_id', 'title', 'description', 'link', 'subtitle'];

    public function file()
    {
        return $this->belongsTo('App\Models\File');
    }
}
