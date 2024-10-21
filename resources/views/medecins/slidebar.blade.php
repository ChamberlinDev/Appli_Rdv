 <!-- Sidebar Start -->
 
 <div class="sidebar pe-4 pb-3">
 <style>
            .sidebar {
    background-color: grey; /* Code couleur pour bleu ciel */
}
         </style>
            <nav class="navbar bg-light navbar-light">
                <a href="#" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hospital"></i>RdvMedical</h3>
                </a>
               
                <div class="navbar-nav w-100">
                    <a href="#" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                
                    <div class="nav-item">
                        <a href="{{route('liste_rdv')}}" class="nav-link " ><i class="fa fa-users"></i>Demandes Rdv</a>
                      
                    </div>
                    <div class="nav-item">
                        <a href="#" class="nav-link"><i class="fa fa-calendar"></i>Definir agenda</a>
                    </div>

                    <div class="nav-item">
                        <a href="#" class="nav-link" ><i class="bi bi-arrow-clockwise"></i>Historiques</a>
                      
                    </div>
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
       