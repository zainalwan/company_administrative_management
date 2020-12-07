<?php

/* 
 * Code that written below is belong to Zain Alwan Wima Irfani. You may
 * not use, share, modify, and study without the author's permission
 * (zainalwan4@gmail.com).
 *  */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class PagesController extends Controller
{
    public function index()
	{
		$datas = [
			'title' => 'LIPSUM',
			'events' => Event::orderBy('id', 'desc')
							 ->take(4)
							 ->get(),
		];
		
		return view('pages.home', $datas);
	}
}
