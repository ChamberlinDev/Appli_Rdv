<!-- Topbar -->
<!-- Main Content -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


<div class="ml-auto">
<a href="#" class=" text-decoration-dark text-dark px-4">{{auth()->user()->nom}}  {{auth()->user()->prenom}}</a> 
 <a href="{{route('logoutUser')}}" class="btn btn-sm btn-danger">Deconnexion</a>
    </div>

<!-- Topbar Navbar -->
</nav>

