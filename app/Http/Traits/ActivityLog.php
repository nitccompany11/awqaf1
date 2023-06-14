<?php

namespace App\Http\Traits;
use Request;
use App\Models\ActivityLog as ActivityLogModel;


class ActivityLog {

    public static function addActivityLog($subject)
    {
        $log = [];
        
        $log['subject'] = $subject;
        $log['url'] = Request::fullUrl();
        $log['method'] = Request::method();
        $log['ip'] = Request::ip();
        $log['agent'] = Request::header('user-agent');
        $log['user_id'] = auth()->check() ? auth()->user()->id : 1;

        ActivityLogModel::create($log);
    }

    public static function getActivityLog()
    {
        return ActivityLogModel::latest()->get();
    }

}