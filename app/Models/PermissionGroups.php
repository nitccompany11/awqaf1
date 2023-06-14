<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PermissionGroups extends Model
{
    protected $table = 'permission_groups';

    protected $fillable = [
        'name_ar',
        'name_en',
    ];

    public function permissions()
    {
    	return $this->hasMany('App\Models\Permission', 'group_id', 'id');
    }

    public function users()
    {
        return $this->hasMany('App\Models\User', 'group_id', 'id');
    }
}
