<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testom extends Model
{
    protected $table = 'testoms';

    protected $fillable = [

        'name',
        'job',
        'comment_ar',
        'comment_en',
        'status',

    ];
}
