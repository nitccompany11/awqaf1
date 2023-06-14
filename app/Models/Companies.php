<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    protected $table = 'companies';

    protected $fillable = [
        'name_ar',
        'name_en',
        'image',
        'status',
        'content_ar',
        'content_en',
        'url',
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
            return url('public/uploads/companies') . '/' . $this->attributes['image'];   
        }
    }
}
