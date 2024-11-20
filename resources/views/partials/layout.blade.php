
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <hr>
<section id="about">
            <div class="container px-4 text-dark">
               
                <hr>
                @php
                $ide=1;
                @endphp
             
            </div>
        </section>
        <section id="about">
            <div class="container px-2 text-dark">
                <div class="row gx-4 justify-content">
             
                   
                </div>
            </div>
        </section>
       
       <!-- Start Why choose -->
		
		
		<!-- Start Affichage Medecin -->
	<section class="blog section" id="blog">
    <div class="container">
        
						<div class="section-title">
							<h2>Medecins</h2>
							<!-- <img src="assets/img/section-img.png" alt="#"> -->
						</div>
 <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
     @foreach($users as $user) 
    <div class="col-lg-4 col-md-6 col-12">
        <!-- Affichage des médecins -->
        <div class="single-news">
            <p class="{{ $user->disponibilite === 'Disponible' ? 'text-success' : 'text-danger' }}">
                <i class="fa-solid fa-circle" 
                   style="color:{{$user->disponibilite === 'Disponible' ? 'green' : 'red'}};"></i> 
                {{ $user->disponibilite }}
            </p>
            <div class="news-head d-flex justify-content-center align-items-center">
                <i class="bi bi-person-circle" style="font-size: 3rem;"></i>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <div class="news-content">
                    <h5 class="text-primary text-center"><a href="#">Dr. {{ $user->name }}</a></h5>
                    <p class="text-center text-secondary"><a href="#">{{ $user->specialite }}</a></p>
                    <p class="text-center text-secondary"><a href="#">{{ $user->nom_etablissement }}</a></p>
                    @if($user->disponibilite === 'Disponible')
                        <a class="btn btn-primary text-light" href="{{ route('prendre-rdv', ['id' => $user->id, 'name' => $user->name, 'specialite' => $user->specialite]) }}">Prendre rdv</a>
                    @else
                        <span class="text-danger">Indisponible</span>
                    @endif
                </div>
            </div>
            <hr>
        </div>
        <!-- End Affichage des médecins -->
    </div>
@endforeach
        </div>
        <hr>
    </div>
</section>
<!-- End Affichage Médecins -->

		<!--/ End Why choose -->
        @php
            $ide+=1;
            @endphp
</section>         
