<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PermissionModel extends Model
{
    protected $table = 'permission_models';

    protected $fillable = [
        'name_ar',
        'name_en',
        'status',
    ];

    public function roles()
    {
    	return $this->hasMany('App\Models\Role', 'per_model_id', 'id');
    }
}
