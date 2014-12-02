@extends('layouts.template')

@section('body')
	<h1>Sign up for {{ $timeslot->time }} on {{ $day->title }}</h1>

	{{ Form::open(array('action' => 'AppController@handleSignup')) }}

		@if ($errors->all())
			<div id="error-message">
				@foreach($errors->all() as $message)
					<p class="inputError">{{ $message }}</p>
				@endforeach
			</div>
		@endif

		<div class="field-row">
			{{ Form::label('name', 'Name') }}
			{{ Form::text('name') }}
		</div>
	
		<div class="field-row">
			{{ Form::label('phone', 'Phone Number') }}
			{{ Form::text('phone') }}
		</div>
	
		<div class="field-row">
			{{ Form::hidden('timeslotID', $timeslot->id) }}
			{{ Form::submit('Schedule Time') }}
		</div>


	{{ Form::close() }}

	<p><a href="{{ action('AppController@showDay', array('dayID' => $day->id)) }}">&larr; Back to available times</a></p>

@stop
