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
		return $timeslotID;
	}

}
