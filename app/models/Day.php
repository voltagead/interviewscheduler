<?php

class Day extends Eloquent {

	/* Returns all timeslots available on this day */
	public function timeslots() {
		return $this->hasMany('Timeslot');
	}

}