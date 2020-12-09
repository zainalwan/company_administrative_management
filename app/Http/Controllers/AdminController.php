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
use App\Http\Requests\ChangePasswordAdmin;

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

        return redirect('/login')->with('notif', 'Welcome ' . $admin->name . ', you are able to login now.');
    }

    /**
     * Display the specified admin resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $datas = [
            'title' => 'Account Details',
            'account' => [
                'name' => session('_ticket')['name'],
                'user_name' => session('_ticket')['user_name'],
            ]
        ];
        
        return view('admin.show', $datas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(ChangePasswordAdmin $request)
    {
        $validated = $request->validated();

        $admin = Admin::find(session('_ticket')['id']);
        $admin->password = Hash::make($validated['new_password']);

        $admin->save();

        return redirect('/account')->with('notif', 'Your password was successfully changed.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Admin::destroy($request->session()->get('_ticket')['id']);

        $name = $request->session()->get('_ticket')['name'];
        
        $request->session()->forget('_ticket');

        return redirect('/login')->with('notif', $name . '\'s account was successfully deleted.');
    }
    
    /* 
     *  Provide register page
     *   */
    public function register()
    {
        return view('admin.register', ['title' => 'Register']);
    }
    
    /* 
     *  Provide login page
     *   */
    public function login(Request $request)
    {
        $request->session()->forget('admin');
        return view('admin.login', ['title' => 'Login']);
    }

    /* 
     * Provide authentication action
     *  */
    public function authenticate(AuthenticateAdmin $request)
    {
        $admin = Admin::find($request->session()->get('admin_id'));
        
        $request->session()->forget('admin_id');

        $datas = [
            'id' => $admin->id,
            'user_name' => $admin->user_name,
            'name' => $admin->name
        ];

        $request->session()->put('_ticket', $datas);

        return redirect('/');
    }
    
    /* 
     * Provide change password form
     *  */
    public function change_password()
    {
        return view('admin.change_password', ['title' => 'Change Password']);
    }
    
    /* 
     * Provide log out action
     *  */
    public function log_out(Request $request)
    {
        $request->session()->forget('_ticket');
        
        return redirect('/login');
    }
}
