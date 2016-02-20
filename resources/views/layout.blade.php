<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laravel Project</title>
		<!-- Stylesheets (managed by SCSS) -->
		<link rel="stylesheet" href="/css/app.css" type="text/css">
		<!-- Meta & Extra Styles -->
		@yield('header')
	</head>
	<body>
		<main>
			@yield('content')
		</main>
		<!-- scripts -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="/js/scripts.js"></script>
		@yield('footer')
	</body>
</html>	