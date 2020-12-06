<?php

/* 
 * Code that written below is belong to Zain Alwan Wima Irfani. You may
 * not use, share, modify, and study without the author's permission
 * (zainalwan4@gmail.com).
 *  */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
	{
		return view('pages.home', ['title' => 'LIPSUM']);
	}
}
