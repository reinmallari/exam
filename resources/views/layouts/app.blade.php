<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Exam</title>

    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
		@yield ('style')
	</head>
	<body>
		@yield ('content')
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="{{ URL::asset('script/paint.js') }}" charset="utf-8"></script>
		@yield ('script')
	</body>
</html>
