
	
		<!-- Debut Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Fin Preloader -->
		@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
		<!-- Debut Header Area -->
		@include('partials.header')
		<!-- Fin Header  -->
		
		<!-- Debut Slider -->
		<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('assets/img/rdv5.jpg')">
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
				<!-- End Single Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('assets/img/rdv.jpg')">
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
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('assets/img/rdv6.jpg')">
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
				<!-- End Single Slider -->
			</div>
		</section>
		<!--/ Fin Slider -->
		
		<!-- Debut Formulaire recherche -->
		<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						<div class="col-lg-12 col-md-6 col-12 ">
							<!-- single-schedule -->
						<div class="single-schedule first">
							<div class="inner">
                                <section class="error-page section">
                                        
                                            <div class="row">
                                                <div class="col-lg-6 offset-lg-3 col-8">
                                                    <!-- Error Inner -->
                                                    <div class="error-inner">
                                                        <form class="search-form" action="{{ route('medecins.search') }}" method="GET">
													 		<label><h3>Rechercher un medecin</h3></label><hr>
                                                            <input placeholder="Saisissez la specialité recherchée...." type="text">
                                                            <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                                        </form>
                                                    </div>
                                                    <!--/ End Error Inner -->
                                                </div>
                                            </div>
                                       
                                 </section>	
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>
		<!-- Fin Formulaire recherche -->

		
		@include('partials.layout')
		
		
		
		
		<!-- Nos partenaires -->
		<div class="section-title">
			<h2>Nos Partenaires</h2>
		</div>
		<div class="clients overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="owl-carousel clients-slider">

							<div class="single-clients">
								<img src="assets/img/yaye_marie.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="assets/img/amitie.jpg" alt="#">
							</div>
							
							
							<div class="single-clients">
								<img src="assets/img/ouakam_hosp.jfif" alt="#">
							</div>
							
							
							<div class="single-clients">
								<img src="assets/img/hopital_principal_dakar_2.jpg" alt="#">
							</div>
							<div class="single-clients">
								<img src="assets/img/hospital_pikine.jpg" alt="#">
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div> 
		<hr>
		<!--/Ens clients-->
		
		<!-- Start statistics -->
		<div class="section-title">
			<h2>Statistiques</h2>
		</div>
				
		<!-- chiffres -->
		<div id="fun-facts" class="fun-facts section overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start localisation -->
						<div class="single-fun">
							<i class="icofont icofont-home"></i>
							<div class="content">
								<span class="counter">0</span>
								<p>Localisation</p>
							</div>
						</div>
						<!-- End localisation -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start nombre docteur -->
						<div class="single-fun">
							<i class="icofont icofont-user-alt-3"></i>
							<div class="content">
								<span class="counter">0</span>
								<p>Nombres Docteurs</p>
							</div>
						</div>
						<!-- End nombre docteur -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start nombre rdv -->
						<div class="single-fun">
							<i class="icofont-simple-smile"></i>
							<div class="content">
								<span class="counter">0</span>
								<p>Nombres de rdv</p>
							</div>
						</div>
						<!-- End nombre rdv-->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start annee experience -->
						<div class="single-fun">
							<i class="icofont icofont-table"></i>
							<div class="content">
								<span class="counter">0</span>
								<p>Année d'experience</p>
							</div>
						</div>
						<!-- End experience -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End chiffres -->
		
		
	@include('partials.footer')