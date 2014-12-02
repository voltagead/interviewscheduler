@extends('layouts.template')

@section('body')
	<ul>
		@foreach ($days as $day)
			<li><a href="{{ action('AdminController@showDay', array('dayID' => $day->id)) }}">{{ $day->title }}</a></li>
		@endforeach
	</ul>
@stop
