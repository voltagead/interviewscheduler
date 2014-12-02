@extends('layouts.template')

@section('body')
	<h1>Log in</h1>

	{{ Form::open(array('action' => 'AdminController@handleLogin')) }}

		@if ($errors->all())
			<div id="error-message">
				@foreach($errors->all() as $message)
					<p class="inputError">{{ $message }}</p>
				@endforeach
			</div>
		@endif

		<div class="field-row">
			{{ Form::label('secretpassword', 'Enter Password') }}
			{{ Form::text('secretpassword') }}
		</div>
	
		<div class="field-row">
			{{ Form::submit('Log in') }}
		</div>

	{{ Form::close() }}

@stop
