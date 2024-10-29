 <!-- Navigation-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
 <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#"><i class="fa fa-hospital"></i> RdvMedical</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-active" href="{{route('loginView')}}">Gerer mes Rdv</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Medecins</a></li>
                        <a class="btn btn-light" href="{{route('loginView')}}">Se connecter </a>
                        <a class="btn btn-primary text-light" href="{{route('registreMedecin')}}">Vous-êtes medecin? </a>
                    </ul>
                </div>
            </div>
        </nav>