<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;
    protected $table = 'files';

    protected $fillable = ['path', 'size', 'filename', 'extension'];
    protected $images = ['png', 'jpg', 'gif', 'jpeg', 'webp'];


    public function getIsImgAttribute()
    {
        return in_array($this->extension, $this->images);
    }
}
