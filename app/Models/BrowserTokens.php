<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrowserTokens extends Model
{
    protected $table = 'browser_tokens';

    protected $fillable = [
        'firebase_token',
        'user_id',
    ];

    public function user()
    {
    	return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
