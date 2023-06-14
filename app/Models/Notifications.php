<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    protected $table = 'notifications';

    protected $fillable = [
        'isRead',
        'redirect_id',
        'click_action',
        'title_ar',
        'content_ar',
        'title_en',
        'content_en',
        'sender_id',
        'receiver_id',
    ];

    public function sender()
    {
    	return $this->belongsTo('App\Models\User', 'sender_id', 'id');
    }

    public function receiver()
    {
    	return $this->belongsTo('App\Models\User', 'receiver_id', 'id');
    }
}
