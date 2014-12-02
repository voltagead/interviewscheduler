@extends('layouts.template')

@section('body')
	<ul>
		<li class="list-header"><h1>Available Days</h1></li>
		@foreach ($days as $day)
			<li><a href="{{ action('AdminController@showDay', array('dayID' => $day->id)) }}">{{ $day->title }}</a></li>
		@endforeach
	</ul>
@stop
