<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
            
            'name_ar' => 'required|string|max:156', 
            'name_en' => 'required|string|max:156',
            'content_ar' => 'required|string',
            'content_en' => 'required|string',
            'description_ar' => 'nullable|string|min:3',
            'description_en' => 'nullable|string|min:3',
            'keyword_ar' => 'nullable|string|min:3',
            'keyword_en' => 'nullable|string|min:3',
            'image_place' => 'required|integer|min:1|max:2',
            'menu_place' => 'required|integer|min:1|max:2',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,gif',

        ];
    }
}
