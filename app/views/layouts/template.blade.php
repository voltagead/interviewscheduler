<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Interview Scheduler</title>

		{{ HTML::style('css/main.css') }}
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		{{ HTML::script('js/common.js') }}
	</head>

	<body>
		<div class="wrapper">

			<div class="header">
			</div>

			<div class="body">
				<div class="wrapper">

					@yield('body')

				</div>
			</div>

		</div>
	</body>

</html>