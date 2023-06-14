<?php 

namespace App\Http\Traits;

trait Helper {

	public function getAddressFromGoogleMap($lat, $lng, $langu)
	{
		
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL,"https://maps.googleapis.com/maps/api/geocode/json?latlng=$lat,$lng&key=AIzaSyBXg8u14j3Xo2eRK3T4yK8052y725FTN98&language=$langu");

		curl_setopt($ch, CURLOPT_POST, 1);

		// Receive server response ...
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$server_output = curl_exec($ch);

		$output = json_decode($server_output);

		curl_close($ch);

		return $output;

	}

}