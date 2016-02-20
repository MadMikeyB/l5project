<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laravel Project</title>
		<!-- Stylesheets (managed by SCSS) -->
		<link rel="stylesheet" href="{{ elixir('css/app.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('css/faceboot.css') }}" type="text/css">
		<!-- Meta & Extra Styles -->
		@yield('header')
	</head>
	<body>
		<div class="wrapper">
		    <div class="box">
		        <div class="row row-offcanvas row-offcanvas-left">
					<!-- sidebar -->
					@include('partials.sidebar')
					<!-- / sidebar -->
					<div class="column col-sm-10 col-xs-11" id="main">
						<!-- top nav -->
						@include('partials.topnav')
						<!-- / top nav -->
						<!-- content -->
						<div class="padding">
							<div class="full col-sm-9">
								<div class="row">
									@yield('content')
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- scripts -->

			<script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
			<script type="text/javascript"  src="/js/scripts.js"></script>
			@yield('footer')
	</body>
</html>	