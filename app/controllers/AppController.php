<?php

class AppController extends BaseController {

	public function showHome() {

		// Get all Days
		$days = Day::all();

		return View::make('home', array(
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

			return View::make('day', array(
				'day' => $day,
				'timeslots' => $timeslots,
			));

		} catch (Exception $e) {
			; // Handle the exception
		}
		return 'No day found';
	}

	public function selectTimeslot($timeslotID) {

		try {
			$timeslot = Timeslot::find($timeslotID);
			if (!$timeslot) {
				throw new Exception('Not found');
			}
			$day = $timeslot->day;
			return View::make('timeslot', array(
				'day' => $day,
				'timeslot' => $timeslot,
			));

		} catch (Exception $e) {
			; // Handle the exception
		}
		return 'Timeslot not found';
	}

	public function handleSignup() {
		try {
			// Set validation rules
			$rules = array(
				'name' => 'required',
				'phone' => 'required',
				'timeslotID' => 'required|numeric',
			);

			// Create a validator
			$validator = Validator::make(Input::all(), $rules);

			if ($validator->fails()) {
				Input::flash();
				return Redirect::back()->withErrors($validator);
			}

			// Get the timeslot
			$timeslot = Timeslot::find(Input::get('timeslotID'));
			if (!$timeslot) {
				throw new Exception('Not found');
			}

			if (!$timeslot->available) {
				throw new Exception('Timeslot not available');
			}

			// Update the timeslot
			$timeslot->name = Input::get('name');
			$timeslot->phone = Input::get('phone');
			$timeslot->available = false; // This slot is no longer available
			$timeslot->save();

			return View::make('signup-complete', array(
				'day' => $timeslot->day,
				'timeslot' => $timeslot,
			));

		} catch (Exception $e) {
			Input::flash();
			return Redirect::back()->withErrors(array('There was an error reserving that timeslot.'));
		}
	}

}
