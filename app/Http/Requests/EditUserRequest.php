<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            
            'name'          => 'required|string|max:156', 
            'email'         => 'required|email|max:156', 
            'password'      => 'max:156',
            'phone'         => 'nullable|string|max:156', 
            'admin'  => 'required|integer|min:1|max:5', 
            'group_id'  => 'nullable|integer|min:1',

        ];
    }
}
