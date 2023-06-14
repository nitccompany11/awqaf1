<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    use HasFactory;

    protected $table = 'reports';

    protected $fillable = [
        'name_ar',
        'name_en',
        'image',
        'status',
        'file',
        'date_project',
        'user_id',
    ];

    public function getUrlTitle()
    {
        return preg_replace('/\s+/', '-', $this->attributes['name_' . getLang()]);
    }

    protected $appends = ['image', 'file'];

    public function getImageAttribute()
    {
        if(empty($this->attributes['image'])) {
            return null;
        } else {
            return url('public/uploads/reports') . '/' . $this->attributes['image'];   
        }
    }

    public function getFileAttribute()
    {
        if(empty($this->attributes['file'])) {
            return null;
        } else {
            return url('public/uploads/reports') . '/' . $this->attributes['file'];   
        }
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
