<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layouts extends Model
{
    protected $table = 'layouts';

    protected $fillable = [
        'name_ar',
        'name_en',
        'image',
        'content_ar',
        'content_en',
    ];

    protected $appends = ['image'];

    public function getImageAttribute()
    {
        if(empty($this->attributes['image'])) {
            return null;
        } else {
            return url('public/uploads/layouts') . '/' . $this->attributes['image'];   
        }
    }
}
