@include('partials.navbar'),
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registre</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <form class="form-control w-50" action="{{route('registre_save')}}" method="post" >
        @csrf
       <div class="text-center"><h3>Inscription Medecin</h3></div>  
    
            
            <div class="mb-3">
                <label for="nom" class="form-label">Nom complet</label>
                <input type="text" name="nom" class="form-control form-control-sm" placeholder="Entrer votre nom et prenom" >
                @error('nom')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control form-control-sm" placeholder="Entrer adresse emal" >
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" name="adresse" class="form-control form-control-sm" placeholder="Entrer votre adresse" >
                @error('adresse')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="code" class="form-label">Code postal cabinet</label>
                <input type="text" name="code" class="form-control form-control-sm" placeholder="Entrer le code postal du cabinet" >
                @error('code')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Specialité</label>
                <select name="role" class="form-control form-control-sm">
                <option value="" disabled selected>Choisissez votre specialité</option>
                    <option value="medecin">Generaliste</option>
                    <option value="patient">Dentiste</option>
                    <option value="admin">Gynecologue</option>

                </select>
                @error('role')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
           
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" name="password" class="form-control form-control-sm" placeholder="Entrer votre password" >
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
            <a href="{{route('loginView')}}" class="btn btn-link">Se connecter</a>
            </form> 
    </div>
</body>
</html>
@extends('partials.footer')