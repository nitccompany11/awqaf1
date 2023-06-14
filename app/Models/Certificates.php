<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificates extends Model
{
    protected $table = 'certificates';

    protected $casts = [ 

        'created_at' => 'datetime',
        'updated_at' => 'datetime'

    ];
}
