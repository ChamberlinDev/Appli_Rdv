<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Espace Administrateur(e)</h1>
</div>

<div class="card card-rectangle">
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminEspace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <!-- As a link -->


  <body>
    <div class="container text-center">
    <h1>Liste des medecins</h1>
    <hr>
    <a href="{{route('ajouter')}}" class="btn btn-primary">Ajouter un medecin</a>
    <hr>
    
    @if(session('success'))
   <div class="alert alert-success">
    {{session('success')}}
   </div>
   @endif
    </div>
    <div class="container text-center">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Telephone</th>
                <th>Role</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
          @php
          $ide=1;
          @endphp
            @foreach($users as $user)
            <tr>
                <td>{{$ide}}</td>
                <td>{{$user->nom}}</td>
                <td>{{$user->prenom}}</td>
                <td>{{$user->telephone}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>

                <td>
                    <a href="#" class="btn btn-primary">voir</a>
                    <a href="#" class="btn btn-danger">Bloquer</a>
                </td>


            </tr>
            @php
            $ide+=1;
            @endphp
           @endforeach
        </tbody>

    </table>
    {{$users->links()}}
    </div>

















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
</div>