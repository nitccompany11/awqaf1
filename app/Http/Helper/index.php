<?php

use App\Models\Setting;
use App\Models\Pages;
use App\Models\Permission;
use App\Models\Layouts;
use App\Models\User;
use App\Models\Notifications;

	function getSetting()
	{
		return Setting::get()->first();
	}

    function getPages($pos)
	{
		return Pages::where('menu_place', $pos)->orderBy('id', 'asc')->where('menu', 1)->get();
	}

	function checkPermission($groupID, $roleID) {

    $user = User::find($groupID);

	$get = Permission::where('group_id', $user->group_id)->get()->pluck('role_id')->toArray();

// 		$get = Permission::where('group_id', $groupID)->get()->pluck('role_id')->toArray();

		if (!empty($get)) {

			if (in_array($roleID, $get)) {
				
				return true;

			} else {

				return false;

			}

		} else {

			return false;

		}

	}

	function getLang() {

		if (!empty(session()->get('lang'))) {

			return session()->get('lang');

		} else {

			return 'ar';

		}

	}

	function getImage($folder = null, $image = null) { // Get Image Function

		if (empty($image)) {
			
			$imageFile = url('public/image.png');

		} else {

			$imageFile = url('public/uploads/' . $folder . '/' . $image);

		}

		return $imageFile;
	}

	function setImage($imageInput, $path, $oldImage = null) { // Set Image Function

		if ($imageInput) {
            
            if ($oldImage != null) {
            	
            	File::delete($path . $oldImage);

            }

            $image = $imageInput;

            $ext = strtolower($image->getClientOriginalExtension());

            $photoName = time() . rand(0, 999999) . '.' . $ext;

            $image->move($path, $photoName);

            return $photoName;

        }
	}

	function getAddressFromGoogleMapHelp($lat, $lng, $langu)
	{
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL,"https://maps.googleapis.com/maps/api/geocode/json?latlng=$lat,$lng&key=AIzaSyAl85sPwlTAsvyHrccu9I8RA76sETwsa-8&language=$langu");

		curl_setopt($ch, CURLOPT_POST, 1);

		// Receive server response ...
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$server_output = curl_exec($ch);

		$output = json_decode($server_output);

		curl_close($ch);

		if ($output->status == 'OK') {

			return $output->results[0]->formatted_address;

		} else {

			return '';

		}

	}
	
	function convert2english($string) {
	    $newNumbers = range(0, 9);
	    // 1. Persian HTML decimal
	    $persianDecimal = array('&#1776;', '&#1777;', '&#1778;', '&#1779;', '&#1780;', '&#1781;', '&#1782;', '&#1783;', '&#1784;', '&#1785;');
	    // 2. Arabic HTML decimal
	    $arabicDecimal = array('&#1632;', '&#1633;', '&#1634;', '&#1635;', '&#1636;', '&#1637;', '&#1638;', '&#1639;', '&#1640;', '&#1641;');
	    // 3. Arabic Numeric
	    $arabic = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
	    // 4. Persian Numeric
	    $persian = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');

	    $string =  str_replace($persianDecimal, $newNumbers, $string);
	    $string =  str_replace($arabicDecimal, $newNumbers, $string);
	    $string =  str_replace($arabic, $newNumbers, $string);
	    return str_replace($persian, $newNumbers, $string);
	}

	function userType()
	{
		return [

			1 => trans('admin.user'),
			3 => trans('admin.adminT'),

		];
	}

	function getLayout($slug)
	{
		return Layouts::where('slug', $slug)->get()->first();
	}