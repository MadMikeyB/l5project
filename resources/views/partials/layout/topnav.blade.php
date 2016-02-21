	<div class="navbar navbar-blue navbar-static-top">
		<div class="navbar-header">
			<button class="navbar-toggle" data-target=".navbar-collapse" data-toggle=
			"collapse" type="button"><span class="sr-only">Toggle</span> <span class=
			"icon-bar"></span> <span class="icon-bar"></span> <span class=
			"icon-bar"></span></button> <a class="navbar-brand logo" href="/">L5</a>
		</div>
		<nav class="collapse navbar-collapse" role="navigation">
			<form class="navbar-form navbar-left">
				<div class="input-group input-group-sm" style="max-width:360px;">
					<input class="form-control" id="srch-term" name="srch-term" placeholder="Search" type="text">
					<div class="input-group-btn">
						<button class="btn btn-default" id="srch-term-btn" type="submit"><i class="glyphicon glyphicon-search"></i></button>
					</div>
				</div>
			</form>
			<ul class="nav navbar-nav">
				<li>
					<a href="/"><i class="glyphicon glyphicon-home"></i> Home</a>
				</li>
				<li>
					<a data-toggle="modal" href="#postModal" role="button"><i class="glyphicon glyphicon-plus"></i> New Card</a>
				</li>
			</ul>
			@if ( Auth::check() )
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#"><i class="glyphicon glyphicon-envelope"></i> 0</a>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-heart"></i> {{ Auth::user()->username }}</a>
					
					<ul class="dropdown-menu">
						<li>
							<a href="">Settings</a>
						</li>
						<li>
							<a href="/logout">Log Out</a>
						</li>
					</ul>
				</li>
			</ul>
			@else
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="/login"><i class="fa fa-sign-in"></i> Log In</a>
				</li>
				<li>
					<a href="/register"><i class="fa fa-users"></i> Register</a>
				</li>
			</ul>			
			@endunless
		</nav>
	</div>