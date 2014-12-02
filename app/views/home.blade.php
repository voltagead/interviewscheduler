@extends('layouts.template')

@section('body')
	<ul>
		@foreach ($days as $day)
			<li><a href="{{ action('AppController@showDay', array('dayID' => $day->id)) }}">{{ $day->title }}</a></li>
		@endforeach
	</ul>
@stop
