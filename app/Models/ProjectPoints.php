<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectPoints extends Model
{
    use HasFactory;

    protected $table = 'project_points';

    protected $fillable = [
        'name_ar',
        'name_en',
        'image',
        'status',
        'description_ar',
        'description_en',
        'project_id',
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

    public function project()
    {
        return $this->belongsTo('App\Models\Projects', 'project_id', 'id');
    }
}
