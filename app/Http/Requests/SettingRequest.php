<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'site_name_ar'          => 'required|string|max:165', 
            'site_name_en'          => 'required|string|max:165',
            'site_copy_ar'          => 'nullable|string|max:165',
            'site_copy_en'          => 'nullable|string|max:165',
            'site_description_ar'   => 'nullable|string',
            'site_description_en'   => 'nullable|string',
            'site_keyword_ar'       => 'nullable|string|max:1000',
            'site_keyword_en'       => 'nullable|string|max:1000',
            'site_email'            => 'nullable|email|max:165',
            'site_phone'            => 'nullable|string|max:50',
            'site_phone2'            => 'nullable|string|max:50',
            'site_address_ar'       => 'nullable|string|max:256',
            'site_address_en'       => 'nullable|string|max:256',
            'facebook' => 'nullable|string|max:256',
            'linkedin' => 'nullable|string|max:256',
            'instagram' => 'nullable|string|max:256',
            'youtube' => 'nullable|string|max:256',
            'twitter' => 'nullable|string|max:191',

        ];
    }
}
