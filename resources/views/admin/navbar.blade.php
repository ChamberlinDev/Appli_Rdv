        <!-- Navbar Start -->
        <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hospital"></i></h2>
                </a>
                
                
                <div class="navbar-nav align-items-center ms-auto">
                    
                   
                    <div class="nav-item">
                    <a href="{{route('profil')}}" class=" text-dark text-decoloration-none"> {{auth()->user()->prenom}} {{auth()->user()->nom}} <i class="fa fa-user"></i></a>
                    <a href="{{route('logoutUser')}}" class="btn btn-danger"> Deconnexion</a>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->