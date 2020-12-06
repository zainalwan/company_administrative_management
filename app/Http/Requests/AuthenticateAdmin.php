<?php

/* 
 * Code that written below is belong to Zain Alwan Wima Irfani. You may
 * not use, share, modify, and study without the author's permission
 * (zainalwan4@gmail.com).
 *  */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

use App\Rules\Registered;
use App\Rules\ValidPassword;

class AuthenticateAdmin extends FormRequest
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
		$admin = DB::table('admins')->where('user_name', '=', $this->user_name)->first();
		
		if($admin)
		{
			return [
				'user_name' => ['bail', 'required', new Registered],
				'password' => ['bail', 'required', new ValidPassword]
			];
		}
		
		return [
			'user_name' => ['bail', 'required', new Registered]
		];
    }

	public function messages()
	{
		return [
			'user_name.required' => 'Please enter your user name.',
		];
	}
}
