<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    protected $fillable = [
        'site_name_ar', 
        'site_name_en',
        'site_copy_ar',
        'site_copy_en',
        'site_description_ar',
        'site_description_en',
        'site_keyword_ar',
        'site_keyword_en',
        'site_email',
        'site_phone',
        'site_phone2',
        'site_address_ar',
        'site_address_en',
        'facebook',
        'linkedin',
        'instagram',
        'youtube',
        'lat',
        'lng',
    ];

    protected $hidden = [
        'site_logo',
        'site_icon',
        'site_logo_footer'
    ];

    protected $appends = ['logo', 'icon'];

    public function getLogoAttribute()
    {
        if(empty($this->attributes['site_logo'])) {
            return null;
        } else {
            return url('public/uploads/settings') . '/' . $this->attributes['site_logo'];   
        }
    }

    public function getIconAttribute()
    {
        if(empty($this->attributes['site_icon'])) {
            return null;
        } else {
            return url('public/uploads/settings') . '/' . $this->attributes['site_icon'];   
        }
    }
}
