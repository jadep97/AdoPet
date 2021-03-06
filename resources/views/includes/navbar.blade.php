<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
	<div class="container">

		<!-- Brand -->
		<a class="navbar-brand waves-effect" href="/">
			<strong class="blue-text">Adopet</strong>
		</a>

		<!-- Collapse -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Links -->
		<div class="collapse navbar-collapse" id="navbarSupportedContent">

			<!-- Left -->
			<ul class="navbar-nav mr-auto">
				@yield('navlinks')
			</ul>

			<!-- Right -->
			<ul class="navbar-nav nav-flex-icons">
				<!-- <li class="nav-item">
					<a class="nav-link waves-effect">
						<span class="badge red z-depth-1 mr-1"> 1 </span>
						<i class="fa fa-shopping-cart"></i>
						<span class="clearfix d-none d-sm-inline-block"> Cart </span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect" target="_blank">
						<i class="fa fa-facebook"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect" target="_blank">
						<i class="fa fa-twitter"></i>
					</a>
				</li> -->
				<!-- <li class="nav-item">
					<a href='/login' class="nav-link border border-light rounded waves-effect">
						<i class="fa fa-user "></i>Login
					</a>
				</li> -->
			</ul>

		</div>

	</div>
</nav>
<!-- Navbar -->
