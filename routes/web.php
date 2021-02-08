<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', 'AdminLoginController@login')->name('login');
Route::post('/login', 'AdminLoginController@adminLogin')->name('admin.login');
Route::get('/forget-password', 'AdminLoginController@forgetPassword')->name('forget-password');
Route::post('/reset-password', 'AdminLoginController@resetPassword')->name('reset-password');

Route::prefix('/admin')->group(function() {
	Route::group(['middleware' => 'admin'], function() {
		Route::get('/dashboard', 'AdminLoginController@adminDashboard')->name('admin.dashboard');
		
		//Change password
		Route::get('/profile/change-password', 'AdminController@changePassword')->name('change.password');
		Route::post('/profile/check-password', 'AdminController@checkPassword')->name('check-password');
		Route::post('/profile/update-password/{id}', 'AdminController@updatePassword')->name('update.password');
	});

	//Admin Logout
	Route::get('/logout', 'AdminLoginController@login')->name('logout');
});
