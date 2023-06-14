<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
        'name_ar',
        'name_en',
        'image',
        'status',
        'content_ar',
        'content_en',
        'keyword_ar',
        'keyword_en',
        'description_ar',
        'description_en',
    ];

    public function getUrlTitle()
    {
        return preg_replace('/\s+/', '-', $this->attributes['name_' . getLang()]);
    }

    protected $appends = ['image'];

    public function getImageAttribute()
    {
        if(empty($this->attributes['image'])) {
            return null;
        } else {
            return url('public/uploads/blogs') . '/' . $this->attributes['image'];   
        }
    }
}
