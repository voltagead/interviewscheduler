<?php

class AppSeeder extends Seeder {

	public function run()
	{

		// Empty tables first
		DB::table('days')->delete();
		DB::table('timeslots')->delete();


		// Add days
		$day1 = Day::create(array(
			'title' => 'December 10',
		));
		
		$day2 = Day::create(array(
			'title' => 'December 20',
		));
		
		$day3 = Day::create(array(
			'title' => 'January 1',
		));


		// Add some timeslots
		$timeslot = Timeslot::create(array(
			'time' => '6:00 pm',
			'available' => false,
			'name' => 'Bob',
			'phone' => '111-222-3333',
		));
		$day1->timeslots()->save($timeslot);

		$timeslot = Timeslot::create(array(
			'time' => '6:30 pm',
			'available' => false,
			'name' => 'Andrew',
			'phone' => '222-222-2222',
		));
		$day1->timeslots()->save($timeslot);

		$timeslot = Timeslot::create(array(
			'time' => '7:00 pm',
			'available' => true,
		));
		$day1->timeslots()->save($timeslot);

		$timeslot = Timeslot::create(array(
			'time' => '7:30 pm',
			'available' => true,
		));
		$day1->timeslots()->save($timeslot);

		$timeslot = Timeslot::create(array(
			'time' => '8:00 pm',
			'available' => false,
			'name' => 'Willie',
			'phone' => '555-555-5555',
		));
		$day1->timeslots()->save($timeslot);


		$timeslot = Timeslot::create(array(
			'time' => '4:00 pm',
			'available' => true,
		));
		$day2->timeslots()->save($timeslot);

		$timeslot = Timeslot::create(array(
			'time' => '4:30 pm',
			'available' => false,
			'name' => 'Eric',
			'phone' => '222-222-2222',
		));
		$day2->timeslots()->save($timeslot);

		$timeslot = Timeslot::create(array(
			'time' => '5:00 pm',
			'available' => true,
		));
		$day2->timeslots()->save($timeslot);


		$timeslot = Timeslot::create(array(
			'time' => '10:00 am',
			'available' => true,
		));
		$day3->timeslots()->save($timeslot);

		$timeslot = Timeslot::create(array(
			'time' => '10:30 am',
			'available' => true,
		));
		$day3->timeslots()->save($timeslot);

		$timeslot = Timeslot::create(array(
			'time' => '11:00 am',
			'available' => false,
			'name' => 'Sarah',
			'phone' => '333-333-3333',
		));
		$day3->timeslots()->save($timeslot);

		$timeslot = Timeslot::create(array(
			'time' => '11:30 am',
			'available' => false,
			'name' => 'Emily',
			'phone' => '444-444-4444',
		));
		$day3->timeslots()->save($timeslot);

	}

}
