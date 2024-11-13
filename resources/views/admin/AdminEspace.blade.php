<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>Rencard_Med</title>
		
		<!-- Favicon -->
        <link rel="icon" href="img/favicon.png">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="assets/css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="assets/css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="assets/css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="assets/css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="assets/css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
		
    </head>
    <body>
<header class="header" >
			<!-- Debut Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Debut Logo -->
								<div class="logo">
									<a href="{{route('AdminEspace')}}"><img src="assets/img/Medical Care2.png" alt="#"></a>
								</div>
								<!-- Fin Logo -->
								<!-- Debut Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- Fin Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Debut Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li><a href="{{route('AdminEspace')}}">Accueil</a></li>
											<li><a href="#">Liste des medecins</a></li>
											<li><a href="#"> Historiques rendez-vous</a></li>
										</ul>
									</nav>
								</div>
								<!--/ Fin Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="{{route('welcome')}}" class="btn btn-danger text-red">Deconnexion</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>		
</header>
<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('assets/img/doc7.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Bienvenu(e) sur <span>Rencard_Med</span><span> Vous trouverez des specialistes </span></h1>
									<h4>Vous pouvez prendre rendez-vous depuis chez vous via cette plateforme! </h4>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				
		</section>
		<!--/ Fin Slider -->
@include('admin.listeMed')
@include('admin.listerdv')

	