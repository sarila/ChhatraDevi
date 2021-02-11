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

		//Admin Profile
		Route::get('/profile/update', 'AdminController@adminProfile')->name('admin.profile');
		Route::post('/profile/update/{id}', 'AdminController@updateProfile')->name('update.profile');

		//Settings
		Route::get('/setting', 'SettingController@index')->name('setting');
		Route::post('/setting/update/{id}', 'SettingController@updateSetting')->name('update.setting');

		//Theme
		Route::get('/setting/theme', 'SettingController@theme')->name('theme');
		Route::post('/theme/update/{id}', 'SettingController@updateTheme')->name('update.theme');

		//Social Settings
		Route::get('/setting/social', 'SettingController@social')->name('social');
		Route::post('/social/update/{id}', 'SettingController@socialUpdate')->name('update.social');

		//Our Team
		Route::resource('teams', TeamController::class);

		//Category
		Route::resource('categories', CategoryController::class);

		//News
		Route::resource('news', NewsController::class);

		//route to store image through Ck editor
		Route::post('ckeditor', 'CkeditorFileUploadController@store')->name('ckeditor.store');
	});

	//Admin Logout
	Route::get('/logout', 'AdminLoginController@login')->name('logout');
});
