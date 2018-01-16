<!-- Made or Customized by DLEGER -->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="../vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
	<link href="/css/style.css" type="text/css" rel="stylesheet">


</head>

<body style="background: #000000">

	<div id="app">

		<!-- ADMIN NAVIGATION -->
		<!-- <nav class="navbar navbar-default navbar-static-top"> -->
		<nav class="navbar navbar-default navbar-inverse navbar-static-top">
			<div class="container-fluid">
				<div class="navbar-header">
					
					<!-- Collapsed Hamburger -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- Branding Image -->
					<a class="navbar-brand" href="{{ url('/') }}">
						{{ config('app.name', 'Laravel') }}
					</a>

				</div>

				<div class="collapse navbar-collapse" id="app-navbar-collapse">

					@guest
					@else
					<!-- Left Side Of Navbar -->
					<ul class="nav navbar-nav">
						&nbsp;
						<li class=""><a href="{{ route('admin') }}">@lang('Dashboard')<span class="sr-only">(current)</span></a></li>						
						<li class=""><a href="{{ route('messages') }}">@lang('Messages')<span class="sr-only">(current)</span></a></li>
						<li class=""><a href="{{ route('skills') }}">@lang('Skills')<span class="sr-only">(current)</span></a></li>
						<li class=""><a href="{{ route('professionals') }}">@lang('Professionals')<span class="sr-only">(current)</span></a></li>
						<li class=""><a href="{{ route('projects') }}">@lang('Projects')<span class="sr-only">(current)</span></a></li>
						<li class=""><a href="{{ route('personals') }}">@lang('Personals')<span class="sr-only">(current)</span></a></li>
						<li class=""><a href="{{ route('register') }}">@lang('Register')<span class="sr-only">(current)</span></a></li>
					</ul>
					@endguest

					<!-- Right Side Of Navbar -->
					<ul class="nav navbar-nav navbar-right">

						<!-- Authentication Links -->
						@guest
							<li><a href="{{ route('login') }}">@lang('Login')</a></li>
						@else
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>

								<ul class="dropdown-menu">
									<li>
										<a href="{{ route('logout') }}"
											onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">
											@lang('Logout')
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
										</form>
									</li>
								</ul>
							</li>
						@endguest
					</ul>
				</div>
			</div>
		</nav>
		@yield('content')
		@include('admin.modal')
	</div>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>

	<!-- Script Additionnel By DLEGER -->
<!-- 	<script type="text/javascript">
	$(document).ready(function(){

		// Store some value before to show the modal
		$('.validsup').click(function(e) {
			
			e.preventDefault();

			$('#btdel').attr('href',$(this).parent().attr('href'));

			// Show the Modal on load
			$("#MyModal").modal("show");

		});

	    // Run action and Hide the Modal
	    $("#btdel").click(function(){

			$(location).attr('href', $('#btdel').attr('href'));
	        $("#MyModal").modal("hide");
	    });
	});

	</script> -->

</body>
</html>
