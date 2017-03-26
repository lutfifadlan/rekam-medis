<?php

use App\User;
use App\Patient;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function()
{
	return Redirect::to('patients');
});

Route::get('users', function()
{
	$users = User::all();

	if (Auth::check()) {
		return View::make('users')->with('users', $users);
	}
	else {
		return Redirect::to('login');
	}
});

Route::get('patients', function()
{
	$patients = Patient::all();

	if (Auth::check()) {
		return View::make('patients')->with('patients', $patients);
	}
	else {
		return Redirect::to('login');
	}
});

/*Route::post('patients', function (Request $request) {
	
});*/

Route::get('patients_form', function()
{
	if (Auth::check()) {
		return View::make('patients_form');
	}

	Redirect::to('login');
});

Route::get('login', array('uses' => 'Controller@showLogin'));

Route::post('login', array('uses' => 'Controller@doLogin'));

Route::get('logout', array('uses' => 'Controller@doLogout'));

Route::post('patients', array('uses' => 'Controller@createPatient'));