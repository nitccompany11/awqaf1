<?php 

namespace App\Http\Traits;

use App\Models\User;
use App\Models\Notifications;

trait Helper {
    
    public function sendSMS($phone, $msg) 
    {
        $curl = curl_init(); 

        $data = [

            "Username" => "",
            "Password" => "",
            "Tagname" => "",
            "RecepientNumber" => "$phone",
            "Message" => "$msg",
            "SendDateTime" => 0,
            "EnableDR" => false

        ];
        

        curl_setopt($curl, CURLOPT_URL, "https://api.yamamah.com/SendSMS");

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($curl, CURLOPT_POST, true);

        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }

    public function sendNotification($users, $title, $content, $click_action, $redirect_id, $userNotify, $notification_id)
    {
        if (is_array($users)) {
            $firebaseToken = $users;
        } else {
            $firebaseToken = [$users];
        }

        $userNoti = Notifications::where('isRead', 0)->where('receiver_id', $userNotify)->get()->count();
          
        $SERVER_API_KEY = '';

        $notification = [ "title" => $title, "body" => $content, "badge" => $userNoti, "click_action" => $click_action, "redirect_id" => $redirect_id, 'sound' => 'default', 'icon' => getImage('settings', getSetting()->site_icon) ];

        $dataArr = ["title" => $title, "body" => $content, "badge" => $userNoti, "redirect_id" => $redirect_id, "notification_id" => $notification_id, "click_action" => $click_action, 'sound' => 'default'];
  
        $data = [
            "registration_ids" => $firebaseToken,
            "notification" => $notification,
            "data" => $dataArr
        ];
        
        $dataString = json_encode($data);
    
        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];
    
        $ch = curl_init();
      
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
               
        $response = curl_exec($ch);
  
        return $response;
    }

}