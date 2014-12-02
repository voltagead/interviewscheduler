@extends('layouts.template')

@section('body')
	<h1>{{ $day->title }}</h1>

	@foreach ($timeslots as $timeslot)

		@if ($timeslot->available)
			<div class="timeslot-row">
		@else
			<div class="timeslot-row unavailable">
		@endif

			<div class="timeslot-left">{{ $timeslot->time }}</div>
			<div class="timeslot-right">
				@if (!$timeslot->available)
					{{ $timeslot->name }}, {{ $timeslot->phone }}
				@endif
			</div>
		</div>

	@endforeach

	<p><a href="{{ action('AdminController@adminHome') }}">&larr; Back to days</a></p>

@stop
