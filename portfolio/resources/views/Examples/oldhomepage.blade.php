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

		<!-- Navigation Menu -->
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
						<i class="fa fa-lock text-danger" aria-hidden="true"></i>&nbsp;  @lang('Private Space')</a>
				</li>

			</ul>
		</nav>

		<!-- Header of Page-->
		<header class="masthead d-flex">

			<div class="container text-center my-auto">

				<!-- Floating Animation -->
				<div class="container">
					<div class="avatar">
						<a href="#contact">
							<img src="./img/photo_dl.jpg" alt="Daniel LEGER" />
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

		<!-- Section Skills -->
		<section class="content-section bg-light text-center" id="Skills">

			<!-- Container Dynamique -->
			<div class="container-fluid">

				<div class="content-section-heading">
					<h3 class="text-secondary mb-0">@lang("What I know doing and what I've learned around years")</h3>
					<h2 class="mb-5 text-shadow">@lang('SKILLS')</h2>
				</div>

				<!-- Main Row -->
				<div class="row">



					<div class="col-lg-1 col-md-0 mb-5 mb-lg-0">
						<h2 class="vertical"><strong>@lang('SKILLS')</strong></h2>
					</div>

					<div class="col-lg-10 col-md-0 mb-2 mb-lg-0">
						
						<div class="row">
							<!-- Card Display -->
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
						</div>

						
					</div>

					<!-- Left Column -->
<!-- 					<div class="col-lg-5 col-md-6 mb-5 mb-lg-0 text-left text-white">
						
						<div class="card bg-primary z-depth-2">
							<div class="card-body">
								<h4 class="text-warning"><strong>@lang('Security')</strong></h4>
								<p class="white-text mb-0">FINJAN - MAILSWEEPER - SOPHOS Anti-Virus - Proxy ALTEON ACC / iPLANET / LDAP / AVENTAIL / BLUECOATS - Gateway SSL - Firewall CHECKPOINT / JUNIPER / Pfsense</p>
							</div>
						</div>

						<br>
						<div class="card bg-primary z-depth-2">
							<div class="card-body">
								<h4 class="text-warning"><strong>@lang('Operating Systems')</strong></h4>
								<p class="white-text mb-0">Os2 - Ms-Dos / Windows - Sco Unix / Qnx / Linux / IPSO Nokia /  MAC OS X - VIRTUAL BOX / PROXMOX</p>
							</div>
						</div>

						<br>

						<div class="card bg-primary z-depth-2">
							<div class="card-body">
								<h4 class="text-warning"><strong>@lang('SGBD et L4G')</strong></h4>
								<p class="white-text mb-0">DBASE IV - ACCESS - ORACLE - SQL - 4ème DIMENSION - PHP / MySQL</p>
							</div>
						</div>


					</div> --> <!-- End of Left Column -->

					<!-- Right Column -->
<!-- 					<div class="col-lg-5 col-md-6 mb-5 mb-md-0 text-left text-white">
						<div class="card bg-primary z-depth-2">
							<div class="card-body">
								<h4 class="text-warning"><strong>@lang('Network')</strong></h4>
								<p class="white-text mb-0">TCP/IP - Novell - Windows Workgroup / Lan Manger - Appletalk / Appleshare -  Switch L4/7 Alteon AD3 & Cisco ACE - Appliances NOKIA - Sondes RIVERBED / Wireshark</p>
							</div>
						</div>

						<br>
						
						<div class="card bg-primary z-depth-2">
							<div class="card-body">
								<h4 class="text-warning"><strong>@lang('Development')</strong></h4>
								<p class="white-text mb-0">COBOL - C++ - Visual Basic / Access Basic - Clipper 5.2 - WINDEV - PERL - PHP - HTML5 - JAVASCRIPT / JQUERY</p>
							</div>
						</div>

						<br>

						<div class="card bg-primary z-depth-2">
							<div class="card-body">
								<h4 class="text-warning"><strong>@lang('Methods')</strong></h4>
								<p class="white-text mb-0">LCP - MERISE - MVC</p>
							</div>
						</div>

					</div> --> <!-- End of Right Column -->

				</div> <!-- End of Row -->

			</div>

		</section>

		<!-- Section Professionals -->
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

							<!-- Left Badge 1-->
							<li class="timeline-badge">
								<div class="timeline-badge">
									<a><i class="fa fa-circle" id="tl1"></i></a>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading text-right">
										<h4><strong>IBM France</strong> - Datacenters Clermont-Ferrand (63)</h4>
									</div>
									<div class="timeline-body text-left">
										<ul type="square">
											<li>On Site Support pour Portable Storage Media.</li>
										</ul>
									</div>
									<div class="timeline-footer">
										<p class="text-right">depuis fin 2016</p>
									</div>
								</div>
							</li>
								
							<!-- Right Badge 2 -->
							<li class="timeline-inverted">
									<div class="timeline-badge">
										<a><i class="fa fa-circle invert" id="tl2"></i></a>
									</div>
									<div class="timeline-panel">
										<div class="timeline-heading text-left">
											<h4><strong>IBM France</strong> - Clermont-Ferrand (63)</h4>
										</div>
										<div class="timeline-body text-justify">
											<ul type="square">
												<li>Application Performance Management : contact privilégié pour Michelin France et Europe : Qualification d'applications - Troubleshooting d'incidents non résolus par les équipes support niveau 1, 2 et 3 - Organisation des activités APM, création de procédures et méthodes d’investigation, installation et maintenance des sondes réseaux (datacenters), réalisation de rapports de qualifications, d’incidents et de préconisations.</li>
												<li>Mise en place et migration des passerelles principales d’inter-connexion réseaux IBM-Michelin : installations et paramétrages des nouveaux équipements, mise à jour des documentations utilisateurs, troubleshootings et upgrades des règles de restrictions tout au long du processus de migration de l’infrastructure et des utilisateurs.</li>
												<li>équipe support réseau niveau 2 & 3 des infrastructures de sécurité Michelin : gestion des Accès Internet Sortant/Entrant, Remote, Extranet/Vpn, déploiement de nouvelles connexions, traitement d'incidents complexes, upgrades de sécurité, revalidation des règles firewall, analyses réseau.</li>
												<li>2004/2005 - Transition réseau : mise en place de l’infrastructure d’accès au réseau Michelin depuis les réseaux IBM Europe (supervision/administration équipements WAN, LAN, VPNs, serveurs d’infrastructure/d’applications, etc.).</li>
												<li>élargissement du réseau d’administration/supervision des infrastructures de sécurité Michelin (Accès Internet Sortant et Entrant, Dial-In, Extranet, etc.).</li>
												<li>participation à des projets de transformation d’infrastructures réseau concernant le client Michelin (anti-spam, sonde ISS, etc.).</li>
											</ul>
										</div>
										<div class="timeline-footer">
											<p class="text-left">2004/2016</p>
										</div>
									</div>
							</li>
							
							<!-- Left Badge 3 -->
							<li class="timeline-badge">
								<div class="timeline-badge">
									<a><i class="fa fa-circle" id="tl3"></i></a>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="text-right"><strong>MICHELIN</strong> Clermont-Ferrand (63)</h4>
									</div>
									<div class="timeline-body text-justify">
										<p><strong>Service EUR/I/IN/TL</strong></p>
										<ul type=square>
											<li>ingénierie et mise en place du réseau d’administration/supervision des infrastructures de sécurité Michelin (Accès Internet Sortants et Entrants, Dial-In, Extranet, etc.).</li>
											<li>support niveau 2 pour le déploiement d’un client Socks (Permeo) sur les postes clients.</li>
											<li>exploitation (relation avec le support utilisateurs et les clients) et support niveau 2 de la nouvelle infrastructure d’accès Internet (relais principal avec le pôle d’expertise).</li>
											<li>mise en production d'une nouvelle architecture d’Accès Internet Sortant :  HTTP/S - SMTP – SOCKS.</li>
											<li>ingénierie des procédures de migration de l’ancienne infrastructure d’accès à Internet vers une nouvelle architecture.</li>
											<li>installation et paramétrage des équipements (Switchs L4/7, Firewalls, Proxys) de la nouvelle infrastructure d’Accès Internet Sortant/Entrant.</li>
										</ul>
									</div>
									<div class="timeline-footer">
										<p class="text-right">2002-2004</p>
									</div>
								</div>
							</li>
							
							<!-- Left Badge 4 -->
							<li class="timeline-badge">
								<div class="timeline-badge">
									<a><i class="fa fa-circle" id="tl4"></i></a>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="text-right"><strong>COHERIS-ATIX</strong> Clermont-Ferrand (63)</h4>
									</div>
									<div class="timeline-body text-justify">
										<p><strong>En régie chez Michelin</strong></p>
										<ul type="square">
											<li>mise en production d’une solution de connexion sécurisée remote (Dial-In) : mise en place des circuits administratifs clients auprès des équipes sécurité Michelin pour la France et l’Europe, formation de l’assistance utilisateurs et des installateurs, assistance téléphonique utilisateurs, administration et maintenance des serveurs d’accès, relation avec les prestataires externes Michelin (Opérateurs télécom et éditeurs de logiciels).</li>
											<li>adaptation et extension de la solution «Dial-In» vers d’autres projets ayant des besoins similaires de connexions remote sécurisées.</li>
											<li>préconisations d’évolution de la solution, tests et mise en place.</li>
											<li>préparation des maquettes de mise à jour des kits d’accès « Dial-In »  (interface avec différents services internes Michelin).</li>
										</ul>
									</div>
									<div class="timeline-footer">
										<p class="text-right">1999-2002 </p>
									</div>
								</div>
							</li>
							
							<!-- Right Badge 5 -->
							<li class="timeline-inverted">
								<div class="timeline-badge">
									<a><i class="fa fa-circle" id="tl5"></i></a>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="text-left"><strong>NETCOM Ingénierie</strong> Lyon (69)</h4>
									</div>
									<div class="timeline-body text-justify">
										<p><strong>En régie chez FRANCE TELECOM pour le service OCISI  (Organisme Central d’Intégration et de Soutien Informatique).</strong></p>
										<ul type="square">
											<li>études d’ingénierie, audits, préconisations et modifications d’architectures réseaux, opérations de déploiement du système d’information et des paliers 96.2, 97.1, 97.2 pour les téléboutiques, les Directions Régionales et les Branches Entreprise du sud-est français et Paris.</li>
											<li>missions de soutien longue durée et de remise à niveau des administrateurs « CIL » (Correspondants Informatiques Locaux) et des agents France Telecom en agences (DR de Montpellier, Branche Entreprise de Paris).</li>
										</ul>
									</div>
									<div class="timeline-footer">
										<p class="text-left">1996-1999</p>
									</div>
								</div>
							</li>
							
							<!-- Left Badge 6 -->
							<li class="timeline-badge">
								<div class="timeline-badge">
									<a><i class="fa fa-circle invert" id="tl6"></i></a>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="text-right"><strong>SSII CS3i</strong> - Vichy (03)</h4>
									</div>
									<div class="timeline-body text-justify">
										<ul type="square">
											<li>développement d’applications de gestion de vente de véhicules pour mandataires automobiles.</li>
											<li>développement de services télématiques en C sous Unix.</li>
											<li>formation clientèle aux logiciels bureautiques (suite Microsoft Office).</li>
											<li>installation et maintenance de matériels et réseaux.</li>
											<li>assistance téléphonique et télé-interventions.</li>
										</ul>
									</div>
									<div class="timeline-footer primary">
										<p class="text-right">1995-1996</p>
									</div>
								</div>
							</li>

							<!-- Right Badge 7 -->
							<li class="timeline-inverted">
								<div class="timeline-badge">
									<a><i class="fa fa-circle" id="tl7"></i></a>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="text-left"><strong>SSII A.S.Consultant</strong> - Cournon (63)</h4>
									</div>
									<div class="timeline-body text-justify">
										<ul type="square">
											<li>développement d’une application d’études statistiques de la qualité du lait pour le laboratoire d'analyses s'occupant des 8 départements de la Région Laitière Auvergne.</li>
											<li>stage d’entreprise dans le cadre du diplôme d'Analyste Programmeur : développement, dépannage clientèle sur site et par téléphone, installation de matériels et de logiciels.</li>
										</ul>
									</div>
									<div class="timeline-footer">
										<p class="text-left">1994-1995</p>
									</div>
								</div>
							</li>

							<!-- Left Badge 8 -->
							<li class="timeline-badge">
								<div class="timeline-badge">
									<a><i class="fa fa-circle invert" id="tl8"></i></a>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="text-right"><strong>PARC NATUREL REGIONAL LIVRADOIS-FOREZ</strong><br />St Gervais-sous-Meymont (63)</h4>
									</div>
									<div class="timeline-body text-justify">
										<ul type="square">
											<li>mise en place et suivi d’appel d'offre d’un marché d’équipements de signalisation touristique.</li>
											<li>mise en place et suivi d’appel d’offre pour le remplacement du parc micro-informatique, suivie par la migration du système d'information et la formation du secrétariat aux matériels et logiciels bureautiques.</li>
										</ul>
									</div>
									<div class="timeline-footer primary">
										<p class="text-right">Juillet 1990 à Octobre 1993</p>
									</div>
								</div>
							</li>

							<!-- Right Badge 9 -->
							<li class="timeline-inverted">
								<div class="timeline-badge">
									<a><i class="fa fa-circle" id="tl9"></i></a>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="text-left"><strong>Association Monts du Forez Découverte</strong> - Saint-Anthème (63)</h4>
									</div>
									<div class="timeline-body text-justify">
										<ul type="square">
											<li>mise en place du système informatique et formation du secrétariat aux matériels et logiciels bureautiques.</li>
										</ul>
									</div>
									<div class="timeline-footer">
										<p class="text-left">Mars 1990 - Juin 1990</p>
									</div>
								</div>
							</li>

							<!-- Left Badge 10 -->
							<li class="timeline-inverted">
								<div class="timeline-badge">
									<a><i class="fa fa-circle invert" id="tl10"></i></a>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="text-left"><strong>PHOTORUCH</strong> - Vichy (03)</h4>
									</div>
									<div class="timeline-body text-justify">
										<ul type="square">
											<li>activité commerciale de vente en magasin de photographie (remplacements ponctuels / vac. du resp.).</li>
										</ul>
									</div>
									<div class="timeline-footer primary">
										<p class="text-left">Janvier 88 - Février 90</p>
									</div>
								</div>
							</li>

							<!-- Right Badge 11 -->
							<li class="timeline-badge">
								<div class="timeline-badge">
									<a><i class="fa fa-circle" id="tl11"></i></a>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="text-right"><strong>Centre Local de Documentation Pédagogique (CLDP)</strong> - Vichy (03)</h4>
									</div>
									<div class="timeline-body text-justify">
										<ul type="square">
											<li>assistance aux instituteurs et mise en page d’un journal à l’usage des enseignants de l’Allier.</li>
											<li>mise en place d’un micro-serveur télématique.</li>
										</ul>
									</div>
									<div class="timeline-footer">
										<p class="text-right">Janvier 88 - Novembre 89</p>
									</div>
								</div>
							</li>

							<!-- End of Timeline -->
							<li class="clearfix no-float"></li>

						</ul>

					</div>

				</div>

			</div>

		</section>

		<!-- Sections Projects -->
		<section class="callout" id="callout">

			<div class="container-fluid text-center">

				<!-- Section Title -->
				<div class="content-section-heading">
					<h2 class="mx-auto text-shadow">@lang('Some of my Projects') !</h2>
				</div>

				<!-- Project Row -->
				<div>
					
					<!-- Left Vertical Tag -->
					<div class="col-lg-1">
						<h4 class="vertical m-3"><strong>@lang('PROJECTS')</strong></h4>
					</div>

					<!-- Project Columns -->
					<div>

						<!-- FlipCards -->
						<div class="flipcontainer">

							<div class="hover panel" onmouseover="javascript:this.className += ' flip';" onmouseout="javascript:this.className = 'hover panel';">

							  <div class="front">
								  <div class="frontTitle">Projet 1</div>
								  <div class="frontLogo isas"></div>
								  <div class="frontLocation">NASA Ames</div>
							  </div>

							  <div class="back">
								<div class="backTitle">Projet 1</div>
								<div class="backParagraph">
								  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</div>
								<div class="backGoto">
								  <a href="http://nicholas.dizin.x10.bz" target="_blank" title="Academic Portfolio">Academic Portfolio →</a>
								</div>
							  </div>

							</div>

							<div class="hover panel" onmouseover="javascript:this.className += ' flip';" onmouseout="javascript:this.className = 'hover panel';">

							  <div class="front">
								  <div class="frontTitle">Projet 2</div>
								  <div class="frontLogo boisedigital"></div>
								  <div class="frontLocation">Boise, Idaho</div>
							  </div>

							  <div class="back">
								<div class="backTitle">Projet 2</div>
								<div class="backParagraph">
								  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</div>
								<div class="backGoto">
								  <a href="http://boisedigitalmarketing.com" target="_blank" title="Boise Digital Marketing">Boise Digital →</a>
								</div>
							  </div>

							</div>

							<div class="hover panel" onmouseover="javascript:this.className += ' flip';" onmouseout="javascript:this.className = 'hover panel';">

							  <div class="front">
								  <div class="frontTitle">Projet 3</div>
								  <div class="frontLogo dissolve"></div>
								  <div class="frontLocation">Dissolve.com</div>
							  </div>

							  <div class="back">
								<div class="backTitle">Projet 3</div>
								<div class="backParagraph">
								  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</div>
								<div class="backGoto">
								  <a href="http://dissolve.com/products?media_type=video&producer=Nicholas+Butler" target="_blank" title="Stock Video Collection (Not very comprehensive atm)">Stock Collection →</a>
								</div>
							  </div>

							</div>
						</div> <!-- End of FlipCards -->

					</div>

				</div> <!-- End of Flip Container -->

			</div> <!-- End of Container -->

		</section>

		<!-- Section Portfolio -->
		<section class="content-section" id="portfolio">

			<div class="container">

				<div class="content-section-heading text-center">
					<h3 class="text-secondary mb-0">@lang('Portfolio')</h3>
					<h2 class="mb-5">@lang('Recent Projects')</h2>
				</div>

				<div class="row no-gutters">

					<div class="col-lg-6">
						<a class="portfolio-item" href="#">
							<span class="caption">
								<span class="caption-content">
									<h2>@lang('Stationary')</h2>
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
			</div>

		</section>

		<!-- Section Contact Me -->
		<section class="content-section bg-primary text-white" id="contact">


			<div class="content-section-heading">

				<!-- Flash Display of good sending of mail -->
				@if(Session::has('confirm_mail'))
					<h4 class="text-center" style="color: #FF0000;">{{Session()->get('confirm_mail')}}</h4>
				@endif

				<!-- Default Title of the section -->
				<h2 class="text-center text-shadow">@lang('Would you like to enter in contact with me') ?</h2>

			</div>

			<div class="container-fluid">

				<div class="row">

					<!-- Vertical Column -->
					<div class="col-lg-1 col-md-0 mb-5 mb-lg-0">
						<h2 class="vertical"><strong>@lang('CONTACT')</strong></h2>
					</div>

					<!-- Form -->
					<form class="col-lg-10 col-md-6 mb-5 mb-lg-0 text-left" method='POST' action="{{ route('sendmessage') }}">
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
				<div class="row border border-left-0 border-right-0 border-bottom-0 border-light text-center">

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

	</body>

</html>
