 <!-- Navigation-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
 <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand text-primary" href="#"><i class="fa fa-hospital"></i> RdvMedical</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-dark" href="#">Demandes Rdv</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="#">Mon agenda</a></li>
                        <a href="#" class=" text-decoration-none text-primary px-4"><i class="fa fa-user"></i>  {{auth()->user()->nom}}  {{auth()->user()->prenom}}</a> 
                        <a class="btn btn-danger text-light" href="{{route('logoutUser')}}">Deconnexion </a>
                    </ul>
                </div>
            </div>
        </nav>