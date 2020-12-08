<?php

/* 
 * Code that written below is belong to Zain Alwan Wima Irfani. You may
 * not use, share, modify, and study without the author's permission
 * (zainalwan4@gmail.com).
 *  */

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\EmployeesController;

/*
   |--------------------------------------------------------------------------
   | Web Routes
   |--------------------------------------------------------------------------
   |
   | Here is where you can register web routes for your application. These
   | routes are loaded by the RouteServiceProvider within a group which
   | contains the "web" middleware group. Now create something great!
   |
 */

Route::middleware(['is_not_logged_in'])->group(function() {
	Route::get('register', [AdminController::class, 'register']);
	Route::post('register', [AdminController::class, 'store']);

	Route::get('login', [AdminController::class, 'login']);
	Route::post('login', [AdminController::class, 'authenticate']);
});

Route::middleware(['is_logged_in'])->group(function() {
	Route::get('log_out', [AdminController::class, 'log_out']);

    Route::match(['get', 'post'], 'event/search', [EventController::class, 'search']);
    
	Route::resources([
		'event' => EventController::class,
		'announcement' => AnnouncementController::class,
		'employee' => EmployeesController::class,
	]);

	Route::get('/', [PagesController::class, 'index'])->middleware('is_logged_in');
});
