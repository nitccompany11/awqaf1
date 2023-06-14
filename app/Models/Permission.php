<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';

    protected $fillable = [
        'group_id',
        'role_id',
    ];

    public function role()
    {
    	return $this->belongsTo('App\Models\Role', 'role_id', 'id');
    }

    public function group()
    {
    	return $this->belongsTo('App\Models\PermissionGroups', 'group_id', 'id');
    }
}
