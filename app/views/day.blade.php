@extends('layouts.template')

@section('body')
	<ul>
		<li class="list-header"><h1>{{ $day->title }}</h1></li>

		@foreach ($timeslots as $timeslot)
			@if ($timeslot->available)

				<li class="timeslot-row clearfix">
					<div class="timeslot-left">{{ $timeslot->time }}</div>
					<div class="timeslot-right">
						<a href="{{ action('AppController@selectTimeslot', array('timeslotID' => $timeslot->id)) }}">Select Time</a>
					</div>
				</li>

			@else

				<li class="timeslot-row unavailable clearfix">
					<div class="timeslot-left">{{ $timeslot->time }}</div>
					<div class="timeslot-right">Unavailable</div>
				</li>

			@endif
		@endforeach
	</ul>
	<p><a href="{{ action('AppController@showHome') }}">&larr; Back to days</a></p>

@stop
