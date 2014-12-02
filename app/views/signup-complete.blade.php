@extends('layouts.template')

@section('body')
	<h1>Signup Complete</h1>

	<p>Congratulations!  Your interview details are below:</p>

	<ul>
		<li>Time: <strong>{{ $timeslot->time }}</strong></li>
		<li>Date: <strong>{{ $day->title }}</strong></li>
		<li>Name: <strong>{{ $timeslot->name }}</strong></li>
		<li>Phone: <strong>{{ $timeslot->phone }}</strong></li>
	</ul>

	<p>If you have any questions, please contact Steven at <a href="mailt:steven@voltaegad.com">steven@voltagead.com</a>.

@stop
