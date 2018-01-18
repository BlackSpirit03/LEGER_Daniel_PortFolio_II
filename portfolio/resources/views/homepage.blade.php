<!-- Made or Customized by DLEGER -->
<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Daniel LEGER Professional Portfolio">
		<meta name="author" content="Daniel LEGER Vichy France">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'Portfolio') }}</title>

		<!-- Local Bootstrap Core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Local Custom Fonts -->
		<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

		<!-- On Line Custom Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
		
		<!-- Custom CSS -->
		<link href="css/stylish-portfolio.min.css" rel="stylesheet">
		<link href="css/stylish-portfolio.css" rel="stylesheet">

		<!-- Specific CSS Design used by DLEGER -->
		<link href="css/specific_design.css" rel="stylesheet">
		<link href="css/timeline.css" rel="stylesheet">
		<link href="css/flipcard.css" rel="stylesheet" type="text/css" >
		<link href="css/portrait.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">

	</head>

	<body id="page-top">

		<!-- ############### Navigation Menu ################### -->
		<a class="menu-toggle rounded" href="#">
			<i class="fa fa-bars"></i>
		</a>
		<nav id="sidebar-wrapper">
			<ul class="sidebar-nav">

				<!-- TOP OF MENU BAR -->
				<li class="sidebar-brand">
 
					<!-- Actual Language Displayed-->
					<button type="button" class="button btn" data-toggle="dropdown" role="button" aria-expanded="false" style="background: #1D809F">

						<img width="25" height="25" alt="{{ session('locale') }}" src="{!! asset('img/country_flags/' . session('locale') . '-flag.png') !!}">

					</button>

					<!-- List to change Language -->
					<ul class="dropdown-menu" style="background-color: rgba(200, 200, 200, 0.4); text-align: center; min-width: 5rem">
						@foreach ( config('app.locales') as $locale)
							@if($locale !== config('app.locale'))
								<li><a href="{!! url('language') !!}/{{ $locale }}"><img width="25" height="25" alt="{{ session('locale') }}" src="{!! asset('img/country_flags/' . $locale . '-flag.png') !!}"></a></li>
							@endif
						@endforeach
					</ul>

					<a class="js-scroll-trigger" href="#page-top">@lang('Welcome') !&nbsp;</a>
						<i class="fa fa-child text-white" aria-hidden="true"></i>

				</li>

				<!-- SEPARATOR -->
				<li class="sidebar-nav-item">
					<hr>
				</li>
				
				<li class="sidebar-nav-item">
					<a class="js-scroll-trigger" href="#page-top">
						<i class="fa fa-home text-white" aria-hidden="true"></i>&nbsp;  @lang('Home')</a>
				</li>

				<li class="sidebar-nav-item">
					<a class="js-scroll-trigger" href="#Skills">
						<i class="fa fa-gears text-white" aria-hidden="true"></i>&nbsp;  @lang('Skills')</a>
				</li>

				<li class="sidebar-nav-item">
					<a class="js-scroll-trigger" href="#Professionals">
						<i class="fa fa-industry text-white" aria-hidden="true"></i>&nbsp;  @lang('Professionals')</a>
				</li>

				<li class="sidebar-nav-item">
					<a class="js-scroll-trigger" href="#portfolio">
						<i class="fa fa-photo text-white" aria-hidden="true"></i>&nbsp;  @lang('Portfolio')</a>
				</li>

				<li class="sidebar-nav-item">
					<a class="js-scroll-trigger" href="#contact">
						<i class="fa fa-envelope text-white" aria-hidden="true"></i>&nbsp;  @lang('Contact')</a>
				</li>

				<li class="sidebar-nav-item">
					<a class="js-scroll-trigger" href="#personals">
						<i class="fa fa-user" aria-hidden="true"></i></i>&nbsp;  @lang('Personals')</a>
				</li>

				<li class="sidebar-nav-item">
					<hr>
				</li>

				<li class="sidebar-nav-item">
					<a class="js-scroll-trigger" href="{{ route('admin') }}">
						<i class="fa fa-lock text-white" aria-hidden="true"></i>&nbsp;  @lang('Private Space')</a>
				</li>

			</ul>
		</nav>

		<!-- ##################@ Header of Page ####################### -->
		<header class="masthead d-flex">

			<div class="container text-center my-auto">

				<!-- Floating Animation -->
				<div class="container">
					<div class="avatar">
						<a class="js-scroll-trigger" href="#contact">
							<img src="img/photo_dl.jpg" alt="Daniel LEGER" />
						</a>
					</div>
				</div>

				<!-- My Name & Small Description -->
				<h1 class="mb-1 text-shadow" id="output">Daniel L&Eacute;GER</h1>
				<h3 class="mb-5">
					<em class="text-shadow">&laquo;&nbsp;@lang('Choose a job you love and you will not<br>have to work a single day of your life')&nbsp;&raquo;<br><span style="text-align: right"><em>- Confucius -</em></span></em>
				</h3>

			</div>

			<div class="overlay"></div>

		</header>

		<!-- ################## Section Skills ################### -->
		<section class="content-section bg-light text-center" id="Skills">

			<!-- Container Dynamique -->
			<div class="container-fluid">

				<div class="content-section-heading">
					<h3 class="text-secondary mb-0">@lang("What I know doing and what I've learned around years")</h3>
					<h2 class="mb-5 text-shadow">@lang('SKILLS')</h2>
				</div>

				<!-- Main Row -->
				<div class="row">

					<!-- Left Column with Section Name -->
					<div class="col-lg-1 col-md-0 mb-5 mb-lg-0">
						<h2 class="vertical"><strong>@lang('SKILLS')</strong></h2>
					</div>

					<!-- Right Cards -->
					<div class="col-lg-10 col-md-0 mb-2 mb-lg-0">
						
						<!-- Card Display -->
						<div class="row">
							@foreach($listSkills as $lineskill)
							<div class="col-lg-6 col-md-0 mb-2 mb-lg-0">
								<div class="card bg-primary text-left mb-3">
									<div class="card-body">
										<h4 class="text-warning"><strong>{{ $lineskill->short_label }}</strong></h4>
										<p class="text-white mb-0">{{ $lineskill->detail }}</p>
									</div>
								</div>
								</div>
							@endforeach
						</div> <!-- End of Card Display -->

					</div> <!-- End of Right Card -->

				</div> <!-- End of Row -->

			</div> <!-- End of Container Fluid -->

		</section>

		<!-- ############## Section Professionals ################# -->
		<section class="content-section bg-primary text-white text-center" id="Professionals">

			<div class="container-fluid">

				<!-- Section Title -->
				<div class="content-section-heading">
					<h3 class="text-secondary mb-0">@lang("What I've Made and Where I've Worked")</h3>
					<h2 class="mb-5 text-shadow">@lang('PROFESSIONALS')</h2>
				</div>

				<!-- Professional Row -->
				<div class="row">

					<!-- Left Vertical Tag -->
					<div class="col-lg-1">
						<h2 class="vertical"><strong>@lang('PROFESSIONALS')</strong></h2>
					</div>

					<!-- Div for the Timeline -->
					<div class="col-lg-10 col-md-10 mb-lg-0 justify-content-center text-black">
						
						<!-- Global Timeline Layout-->
						<ul class="timeline">

							@foreach($listProfessionals as $lineprofessional)
							<li>{!! $lineprofessional->detail !!}</li>
							@endforeach

							<!-- End of Timeline -->
							<li class="clearfix no-float"></li>

						</ul>

					</div>

				</div>

			</div>

		</section>

		<!-- ############## Sections Projects ################# -->

		<!-- ################ Section Portfolio #################### -->
		<section class="content-section" id="portfolio" style="background-image: url(img/bg-callout.jpg);background-repeat: no-repeat;background-size: cover;">

			<!-- Portfolio Container -->
			<div class="container-fluid">

				<!-- Section Title -->
				<div class="content-section-heading text-center">
					<h3 class="mb-0 text-shadow text-white">@lang('Portfolio')</h3>
					<h2 class="mb-5 mx-auto text-shadow">@lang('Some of my Projects') !</h2>
				</div>

				<!-- Portfolio Row -->
				<div class="row">

					<!-- Left Vertical Tag -->
					<div class="col-lg-1">
						<h2 class="vertical"><strong>@lang('PORTFOLIO')</strong></h2>
					</div>

					<!-- Right Column -->
					<div class="col-lg-10 col-md-0 mb-2 mb-lg-0">
						<div class="row no no-gutters">

						<div class="col-lg-6">
							<a class="portfolio-item" href="#">
								<span class="caption">
									<span class="caption-content">
										<h2>Stationary</h2>
										<p class="mb-0">A yellow pencil with envelopes on a clean, blue backdrop !</p>
									</span>
								</span>
								<img class="img-fluid" src="img/portfolio-1.jpg" alt="">
							</a>
						</div>

						<div class="col-lg-6">
							<a class="portfolio-item" href="#">
								<span class="caption">
									<span class="caption-content">
										<h2>Ice Cream</h2>
										<p class="mb-0">A dark blue background with a colored pencil, a clip, and a tiny ice cream cone!</p>
									</span>
								</span>
								<img class="img-fluid" src="img/portfolio-2.jpg" alt="">
							</a>
						</div>

						<div class="col-lg-6">
							<a class="portfolio-item" href="#">
								<span class="caption">
									<span class="caption-content">
										<h2>Strawberries</h2>
										<p class="mb-0">Strawberries are such a tasty snack, especially with a little sugar on top!</p>
									</span>
								</span>
								<img class="img-fluid" src="img/portfolio-3.jpg" alt="">
							</a>
						</div>

						<div class="col-lg-6">
							<a class="portfolio-item" href="#">
								<span class="caption">
									<span class="caption-content">
										<h2>Workspace</h2>
										<p class="mb-0">A yellow workspace with some scissors, pencils, and other objects.</p>
									</span>
								</span>
								<img class="img-fluid" src="img/portfolio-4.jpg" alt="">
							</a>
						</div>
					</div>

					</div> <!-- End of Column -->
				</div> <!-- End of Row -->
			</div> <!-- End of Container -->

		</section>

		<!-- ############## Section Contact Me ################ -->
		<section class="content-section bg-primary text-white" id="contact">


			<div class="content-section-heading">

				<!-- Flash Display of good sending of mail -->
				@if(Session::has('confirm_mail'))
				<div id="div.alert">
					<h4 class="text-center" style="color: #FF0000;">{{Session()->get('confirm_mail')}}</h4>
				</div>
				@endif

				<!-- Default Title of the section -->
				<h2 class="text-center text-shadow">@lang('Would you like to contact me') ?</h2>

			</div>

			<div class="container-fluid">

				<div class="row">

					<!-- Vertical Column -->
					<div class="col-lg-1 col-md-0 mb-5 mb-lg-0">
						<h2 class="vertical"><strong>@lang('CONTACT')</strong></h2>
					</div>

					<!-- Form -->
					<form class="col-lg-10 col-md-6 mb-5 mb-lg-0 text-left" method='POST' action="{{ route('sendmessage') }}"> <!-- novalidate -->
						{{ csrf_field() }}

						<!-- First Line -->
						<div class="form-row justify-content-center">

							<div class="form-group col-lg-4">
								<i class="fa fa-user" aria-hidden="true"></i>
								<label for="inputName">@lang('Your Name')</label>
								<input type="text" class="form-control" id="inputName" name="name_contact" placeholder="@lang('Type here your First Name / Last Name')" required>
							</div>

							<div class="form-group col-lg-4">
								<i class="fa fa-industry" aria-hidden="true"></i>
								<label for="inputCompany">@lang('Your Company')</label>
								<input type="text" class="form-control" id="inputCompany" name="company_contact" placeholder="@lang('Type here the name of your Company')">
							</div>

						</div>

						<!-- Second Line -->
						<div class="form-row justify-content-center">

							<div class="form-group col-lg-4">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<label for="inputEmail">@lang('Your Email')</label>
								<input type="email" class="form-control" id="inputEmail" name="email" placeholder="@lang('Type here your email address')" required>
							</div>

							<div class="form-group col-lg-4">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<label for="inputPhone">@lang('Your Phone Number')</label>
								<input type="text" class="form-control" id="inputPhone" name="phone_contact" placeholder="@lang('Type here your phone number')">
							</div>

						</div>

						<!-- Third Line -->
						<div class="form-row justify-content-center">

							<div class="form-group col-lg-8">
								<i class="fa fa-pencil" aria-hidden="true"></i>
								<label for="inputMessage">@lang('Your Message')</label>
								<textarea class="form-control" rows="3" id="inputMessage" name="message" placeholder="@lang('Type here your message for me')" required></textarea>
							</div>

						</div>

						<!-- Quarter Line -->
						<div class="form-row justify-content-center">
						
							<!-- Check Box -->
							<div class="form-group col-lg-4">
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="checkbox" name="flag_urgent" value="1">
										<i class="fa fa-ambulance" aria-hidden="true"></i>
										 @lang('Indicate your message is urgent') <br> (@lang('I will contact you quickly'))
									</label>
								</div>
							</div>

							<!-- Buttons -->
							<div class="form-group col-lg-2 justify-content-center">
								<button type="reset" class="btn btn-danger btn-block">
									<i class="fa fa-close" aria-hidden="true"></i>&nbsp;@lang('Cancel & Reset Form')</button>
							</div>

							<div class="form-group col-lg-2 justify-content-center">
								<button type="submit" class="btn btn-success btn-block">
									<i class="fa fa-paper-plane-o" aria-hidden="true"></i>&nbsp;@lang('Send It Now')</button>
							</div>

						</div>

					</form> <!-- End of Form -->

				</div> <!-- End of Main Row -->

			</div> <!-- End of Container -->
						
		</section>

		<!-- Footer -->
		<footer class="footer" style="background-color:black;" id="personals">
			<div class="container-fluid">
				
				<!-- Personal Row -->
				<div class="row">

					<!-- Vertical Column -->
					<div class="col-lg-1 col-md-0 mb-5 mb-lg-0">
						<h2 class="vertical"><strong>@lang('PERSONALS')</strong></h2>
					</div>

					<div class="col-lg-10 col-md-6 mb-5 mb-lg-0">

						<ul class="text-white text-left" type="square">

							@foreach($listPersonals as $linepersonal)
							<li>{!! $linepersonal->detail !!}</li>
							@endforeach

						</ul>

					</div>

				</div> <!-- End of Personal Row -->

				<!-- Second Row -->
				<div class="mt-5 row border border-left-0 border-right-0 border-bottom-0 border-light text-center">

					<div class="col">

						<br>
					
						<p class="text-muted small mb-0 text-white">Copyright &copy; <strong>Daniel L&Eacute;GER</strong> - PortFolio Project - Dec.2017</p>
						
						<p class="text-muted small mb-0">
							<i class="fa fa-cog fa-spin fa fa-fw"></i>
								@lang('With the help of interesting Internet ressources below') :</p>

						<p class="text-muted small mb-0">@lang('Template') <a href="https://startbootstrap.com/template-overviews/stylish-portfolio/" target="_blank">Stylish Portfolio</a></p>

						<p class="text-muted small mb-0">@lang('Icons by') <a href="https://fortawesome.github.io/Font-Awesome/" target="_blank">FontAwesome 4.1 Icons</a> - @lang('Created by') <a href="http://jenniferperrin.com" target="_blank">Jennifer Perrin</a></p>

						<p class="text-muted small mb-0">@lang('Powered by') <a href="https://laravel.com" target="_blank">Laravel</a> @lang('and') <a href="https://getbootstrap.com" target="_blank">Bootstrap</a></p>

						<p class="text-muted small mb-0">@lang('With the inestimable help of the tutorial made by') Chavelli Maurice<br><a href="http://laravel.sillo.org" target="_blank">"Laravel, un framework qui rend heureux"</a></p>

					</div>

				</div> <!-- End of Second Row -->

			</div> <!-- End of Container -->

		</footer>

		<!-- Scroll to Top Button-->
		<a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
			<i class="fa fa-angle-up"></i>
		</a>

		<!-- Bootstrap core JavaScript -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Plugin JavaScript -->
		<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

		<!-- Additional Custom scripts used in this template -->
		<script src="js/stylish-portfolio.min.js"></script>
		<script src="js/cypher_Animation.js"></script>

		<!-- Flash Alert -->
		<script>
			$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
		</script>

	</body>

</html>
