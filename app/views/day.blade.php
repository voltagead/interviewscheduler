@extends('layouts.template')

@section('body')
	<h1>{{ $day->title }}</h1>

	@foreach ($timeslots as $timeslot)
		@if ($timeslot->available)

			<div class="timeslot-row">
				<div class="timeslot-left">{{ $timeslot->time }}</div>
				<div class="timeslot-right">
					<a href="{{ action('AppController@selectTimeslot', array('timeslotID' => $timeslot->id)) }}">Select Time</a>
				</div>
			</div>

		@else

			<div class="timeslot-row unavailable">
				<div class="timeslot-left">{{ $timeslot->time }}</div>
				<div class="timeslot-right">Unavailable</div>
			</div>

		@endif
	@endforeach

	<p><a href="{{ action('AppController@showHome') }}">&larr; Back to days</a></p>

@stop
