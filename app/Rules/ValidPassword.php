<?php

/* 
 * Code that written below is belong to Zain Alwan Wima Irfani. You may
 * not use, share, modify, and study without the author's permission
 * (zainalwan4@gmail.com).
 *	*/

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ValidPassword implements Rule
{
	/**
	 * Create a new rule instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Determine if the validation rule passes.
	 *
	 * @param  string  $attribute
	 * @param  mixed  $value
	 * @return bool
	 */
	public function passes($attribute, $value)
	{
		if(session('admin_id'))
        {
            $admin = DB::table('admins')->where('id', '=', session('admin_id'))->first();

            if(Hash::check($value, $admin->password))
            {
                return true;
            }
            
			return false;
		}
		
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Your password is invalid.';
    }
}
