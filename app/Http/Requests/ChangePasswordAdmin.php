<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidCurrentPassword;

class ChangePasswordAdmin extends FormRequest
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
            'current_password' => ['bail', 'required', new ValidCurrentPassword],
            'new_password' => 'bail|required|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|min:8',
            'retype_new_password' => 'same:new_password'
        ];
    }

    public function messages()
    {
        return [
            'current_password.required' => 'Please enter your current password',

			'new_password.required' => 'Please enter your new password.',
			'new_password.regex' => 'Please enter the valid new password.',
			'new_password.min' => 'Please enter the valid new password.',
        ];
    }
}
