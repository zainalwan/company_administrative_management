<?php

/* 
 * Code that written below is belong to Zain Alwan Wima Irfani. You may
 * not use, share, modify, and study without the author's permission
 * (zainalwan4@gmail.com).
 *  */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdmin extends FormRequest
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
			'name' => 'bail|required|max:255',
			'user_name' => 'bail|required|alpha_dash|unique:admins,user_name|max:255',
			'password' => 'bail|required|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|min:8',
			'retype_password' => 'same:password'
        ];
    }

	public function messages()
	{
		return [
			'name.required' => 'Please enter your name.',
			'name.max' => 'Your name is too long.',
			
			'user_name.required' => 'Please enter your user name.',
			'user_name.unique' => 'This user name already used.',
			'user_name.max' => 'Your name is too long.',

			'password.required' => 'Please enter your password.',
			'password.regex' => 'Please enter the valid password.',
			'password.min' => 'Please enter the valid password.',

			'retype_password.same' => 'This field must match with the password above.'
		];
	}
}
