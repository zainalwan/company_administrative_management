<?php

/* 
 * Code that written below is belong to Zain Alwan Wima Irfani. You may
 * not use, share, modify, and study without the author's permission
 * (zainalwan4@gmail.com).
 *  */

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdmin;
use App\Http\Requests\AuthenticateAdmin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdmin $request)
    {
		$validated = $request->validated();

		$admin = new Admin;

		$admin->name = $validated['name'];
		$admin->user_name = $validated['user_name'];
		$admin->password = Hash::make($validated['password']);

		$admin->save();

		return redirect('login');
    }

    /**
     * Display the specified admin resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
		//
    }
	
	/* 
	 * 	Provide register page
	 * 	 */
	public function register()
	{
		return view('admin.register', ['title' => 'Register']);
	}
	
	/* 
	 * 	Provide login page
	 * 	 */
	public function login(Request $request)
	{
		$request->session()->forget('admin');
		return view('admin.login', ['title' => 'Login']);
	}

	/* 
	 * 	Provide authentication action
	 *  */
	public function authenticate(AuthenticateAdmin $request)
	{
		$admin = $request->session()->get('admin');
		$request->session()->forget('admin');

		$datas = [
			'id' => $admin->id,
			'user_name' => $admin->user_name,
			'name' => $admin->name
		];

		$request->session()->put('_ticket', $datas);

		return redirect('/');
	}
	
	/* 
	 * 	Provide log out action
	 * 	 */
	public function log_out(Request $request)
	{
		$request->session()->forget('_ticket');
		
		return redirect('/login');
	}
}
