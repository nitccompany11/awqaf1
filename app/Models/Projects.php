<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'name_ar',
        'name_en',
        'image',
        'status',
        'content_ar',
        'content_en',
        'description_ar',
        'description_en',
        'date_project',
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
            return url('public/uploads/projects') . '/' . $this->attributes['image'];   
        }
    }

    public function points()
    {
        return $this->hasMany('App\Models\ProjectPoints', 'project_id', 'id');
    }
}
