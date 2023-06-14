<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'name_ar',
        'name_en',
        'per_model_id',
    ];

    public function permissionModel()
    {
    	return $this->belongsTo('App\Models\PermissionModel', 'per_model_id', 'id');
    }

    public function permissions()
    {
        return $this->belongsTo('App\Models\Permission', 'role_id', 'id');
    }
}
