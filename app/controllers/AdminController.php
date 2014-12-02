<?php

class AdminController extends BaseController {

	public function login() {
		return View::make('admin.login');
	}

	public function handleLogin() {

		// Set validation rules
		$rules = array(
			'secretpassword' => 'required',
		);

		// Create a validator
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			Input::flash();
			return Redirect::back()->withErrors($validator);
		}

		if (Input::get('secretpassword') == '12345') {
			Session::set('user-admin', true);
			return Redirect::action('AdminController@adminHome');
		}

		return Redirect::action('AdminController@login')->withErrors('Password Incorrect');
	}

	public function logout() {
		Session::forget('user-admin');
		return View::make('admin.login');
	}

	public function adminHome() {
		// Get all Days
		$days = Day::all();

		return View::make('admin.admin-home', array(
			'days' => $days,
		));
	}

	public function showDay($dayID) {
		try {
			$day = Day::find($dayID);
			if (!$day) {
				throw new Exception('Not found');
			}

			$timeslots = $day->timeslots;

			return View::make('admin.admin-day', array(
				'day' => $day,
				'timeslots' => $timeslots,
			));

		} catch (Exception $e) {
			; // Handle the exception
		}
		return 'No day found';
	}


}
