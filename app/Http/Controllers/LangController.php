<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function index($lang)
    {
        
    	if (in_array($lang, ['ar', 'en', 'ur'])) {
		
			if (session()->has('lang')) {
				
				session()->forget('lang');

			}

			session()->put('lang', $lang);

		} else {

			if (session()->has('lang')) {
				
				session()->forget('lang');

			}

			session()->put('lang', 'ar');

		}

		return back();
    }
}
