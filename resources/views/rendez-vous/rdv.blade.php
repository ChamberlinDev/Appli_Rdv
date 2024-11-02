@extends('partials.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <form class="form-control w-50" action="#" method="post" >
        @csrf
       <div class="text-center text-primary"><h3>Prendre rendez-vous</h3></div>  
    
            <div class="mb-3">
                <label for="nom_patient" class="form-label">Nom du patient</label>
                <input type="text" name="nom_patient" class="form-control form-control-sm"  >
                @error('nom_patient')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="telephone" class="form-label">Telephone</label>
                <input type="text" name="telephone" class="form-control form-control-sm"  >
                @error('telephone')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" name="date" class="form-control form-control-sm"  >
                @error('date')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="heure" class="form-label">Heure</label>
                <input type="time" name="heure" class="form-control form-control-sm"  >
                @error('heure')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nom_medecin" class="form-label">Nom du medecin</label>
                <input type="text" name="nom_medecin" class="form-control form-control-sm" value="" >
               
            </div>
           
            <div class="mb-3">
                <label for="specialite" class="form-label">Specialite</label>
                <input type="text" name="specialite" class="form-control form-control-sm" value="" >
               
            </div>
           
           
            <a href="#" class="btn btn-success">Valider</a>
            <a href="{{route('main')}}" class="btn btn-danger">Annuler</a>

            </form> 
    </div>
</body>
</html>













