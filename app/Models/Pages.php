<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = 'pages';

    protected $fillable = [
        'name_ar', 
        'name_en',
        'content_ar',
        'content_en',
        'keyword_ar',
        'keyword_en',
        'description_ar',
        'description_en',
        'menu',
        'image',
        'menu_place',
        'image_place'
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
            return url('public/uploads/pages') . '/' . $this->attributes['image'];   
        }
    }
}
