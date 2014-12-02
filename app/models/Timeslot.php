<?php

class Timeslot extends Eloquent {

	/* Returns the Day that this time belongs to */
	public function day() {
		return $this->belongsTo('Day');
	}

}