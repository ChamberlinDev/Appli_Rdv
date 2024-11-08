@include('partials.header')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('assets/img/rdv8.jpg')">
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
				<div class="single-slider" style="background-image:url('assets/img/rdv2.jpg')">
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
				<div class="single-slider" style="background-image:url('assets/img/rdv3.jpg')">
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
		
        <hr class="col-x">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-6 offset-md-3">
                <form action="{{ route('medecins.search') }}" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" name="specialite" placeholder="Rechercher un médecin..." value="{{ $specialite ?? '' }}">
                        <button class="btn btn-primary" type="submit">
                            <i class="fa fa-search"></i> Rechercher
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Message d'erreur si aucun médecin trouvé -->
        @if(session('message'))
            <div class="alert alert-warning text-center">
                {{ session('message') }}
            </div>
        @endif

        <!-- Affichage des résultats -->
        <div class="section-title text-center mb-4">
            <h2>Résultats de recherche pour : {{ $specialite }}</h2>
        </div>

        <div class="row">
            @if($users->isEmpty())
                <div class="col-12 text-center">
                    <p>Aucun médecin trouvé pour cette spécialité.</p>
                </div>
            @else
                @foreach($users as $user)
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <!-- Affichage de chaque médecin -->
                        <div class="single-news">
                            <div class="news-head d-flex justify-content-center align-items-center">
                                <i class="bi bi-person-circle" style="font-size: 3rem;"></i>
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <div class="news-content">
                                    <h5 class="text-primary text-center">
                                        <a href="#">Dr. {{ $user->name }}</a>
                                    </h5>
                                    <p class="text-center">
                                        <a href="#">{{ $user->specialite }}</a>
                                    </p>

                                    <a class="btn btn-primary text-light" 
                                       href="{{ route('prendre-rdv', ['id' => $user->id, 'name' => $user->name, 'specialite' => $user->specialite]) }}">
                                        Prendre rdv
                                    </a> 
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        
        <div class="d-flex justify-content-center">
            {{ $users->links() }}
        </div>
    </div>


<hr>
@include('partials.footer')