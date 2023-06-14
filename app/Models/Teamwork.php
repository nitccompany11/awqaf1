<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teamwork extends Model
{
    protected $table = 'teamworks';

    protected $fillable = [

        'name',
        'job',
        'image',
        'status',
        'content_ar',
        'content_en',

    ];

    protected $appends = ['image'];

    public function getImageAttribute()
    {
        if(empty($this->attributes['image'])) {
            return null;
        } else {
            return url('public/uploads/teamwork') . '/' . $this->attributes['image'];   
        }
    }
}
