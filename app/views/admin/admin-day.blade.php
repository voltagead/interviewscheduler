@extends('layouts.template')

@section('body')
	<ul>
		<li class="list-header"><h1>{{ $day->title }}</h1></li>

		@foreach ($timeslots as $timeslot)

			<li class="timeslot-row clearfix">

				<div class="timeslot-left">{{ $timeslot->time }}</div>
				<div class="timeslot-right">
					@if (!$timeslot->available)
						{{ $timeslot->name }}, {{ $timeslot->phone }}
					@endif
				</div>
			</li>

		@endforeach
	</ul>

	<p><a href="{{ action('AdminController@adminHome') }}">&larr; Back to days</a></p>

@stop
