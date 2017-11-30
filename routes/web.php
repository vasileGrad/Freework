<?php

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

Route::get('/', 'PagesController@getIndex')->name('main');

/*
// Authentication Routes
Route::get('auth/admin-login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('auth/admin-login', 'Auth\AdminLoginController@login');
Route::get('auth/logout', 'Auth\AdminLoginController@logout')->name('logout');

Route::get('auth/client-login', 'Auth\ClientLoginController@showLoginForm')->name('client.login');
Route::post('auth/client-login', 'Auth\ClientLoginController@login');
Route::get('auth/logout', 'Auth\ClientLoginController@logout')->name('logout');

Route::get('auth/freelancer-login', 'Auth\FreelancerLoginController@showLoginForm')->name('freelancer.login');
Route::post('auth/freelancer-login', 'Auth\FreelancerLoginController@login');
Route::get('auth/logout', 'Auth\FreelancerLoginController@logout')->name('logout');

// Registration Routes
Route::get('auth/register', 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register.submit');
Route::post('auth/register', 'Auth\RegisterController@register');
*/

Auth::routes();

Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	//Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::prefix('client')->group(function() {
	Route::get('/login', 'Auth\ClientLoginController@showLoginForm')->name('client.login');
	Route::post('/login', 'Auth\ClientLoginController@login')->name('client.login.submit');

	Route::get('/register', 'Auth\ClientRegisterController@showRegistrationForm')->name('client.register');
	Route::post('/register', 'Auth\ClientRegisterController@register')->name('client.register.submit');
	//Route::get('/', 'ClientController@index')->name('client');
});

Route::prefix('freelancer')->group(function() {
	Route::get('/login', 'Auth\FreelancerLoginController@showLoginForm')->name('freelancer.login');
	Route::post('/login', 'Auth\FreelancerLoginController@login')->name('freelancer.login.submit');

	Route::get('/register', 'Auth\FreelancerRegisterController@showRegistrationForm')->name('freelancer.register');
	Route::post('/register', 'Auth\FreelancerRegisterController@register')->name('freelancer.register.submit');
	//Route::get('/', 'FreelancerController@index')->name('freelancer');
});
