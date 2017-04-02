<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use DB;
use Log;
use Session;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function showLogin()
    {
    	return View::make('login');
    }

	public function doLogin()
	{
		$rules = array(
			'name'	=>	'required|string',
			'password' => 'required|alphaNum|min:3'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			$userdata = array(
				'name' => Input::get('name'),
				'password' => Input::get('password')
			);

			if (Auth::attempt($userdata)) {
				return Redirect::to('patients');
			}
			else {
				return Redirect::to('login');
			}
		}
	}

	public function doLogout()
	{
		Auth::logout();
		return Redirect::to('login');
	}

	public function createPatient(Request $request)
	{
		$patientNumber = $request->input('patient_number');
		$allergyHistory = $request->input('allergy_history');
		$insurance = $request->input('insurance');
		$name = $request->input('name');
		$parents = $request->input('parents');
		$age = $request->input('age');
		$birthDay = $request->input('birthday');
		$partner = $request->input('partner');
		$gender = $request->input('gender');
		$education = $request->input('education');
		$religion = $request->input('religion');
		$job = $request->input('job');
		$marriage = $request->input('marriage');
		$address = $request->input('address');
		$phoneNumber = $request->input('phone_number');
		$weight = $request->input('weight');
		$height = $request->input('height');
		$date = $request->input('date');
		$anamnesa = $request->input('anamnesa');
		$physicalExamination = $request->input('physical_examination');
		$diagnosis = $request->input('diagnosis');
		$act = $request->input('act');
		$doctor = $request->input('doctor');

		DB::table('patients')->insert(
			[
				'patient_number' => $patientNumber,
		    	'allergy_history' => $allergyHistory,
		    	'insurance' => $insurance,
				'name' => $name, 
    			'parents' => $parents,
				'age' => $age, 
				'birthday' => $birthDay,
				'partner' => $partner,
				'gender' => $gender,
				'education' => $education,
				'religion' => $religion,
				'job' => $job,
				'marriage' => $marriage,
				'address' => $address,
				'phone_number' => $phoneNumber,
				'weight' => $weight,
				'height' => $height,
				'date' => $date,
				'anamnesa' => $anamnesa,
				'physical_examination' => $physicalExamination,
				'diagnosis' => $diagnosis,
				'act' => $act,
				'doctor' => $doctor
		    ]
		);

		if (Auth::check()) {
			Session::flash('message', 'Data berhasil disimpan!');
			return Redirect::to('patients');
		}
		else {
			return Redirect::to('login');
		}
	}
}
