
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/profil.css')}}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<div class="container rounded bg-white mt-5 mb-5">

    <div class="row">
        <div class="col-md-3 border-right text-center">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
            <a href="{{route('logoutUser')}}" class="btn btn-danger "> Deconnexion</a>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right text-center">Informations personnelles</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nom</label><input type="text" class="form-control"  value=""></div>
                    <div class="col-md-6"><label class="labels">Prenom</label><input type="text" class="form-control" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Telephone</label><input type="text" class="form-control" value=""></div>
                    <div class="col-md-12"><label class="labels"> Adresse email</label><input type="text" class="form-control"  value=""></div>
                    <div class="col-md-12"><label class="labels">Role</label><input type="text" class="form-control"  value=""></div>
                    <div class="col-md-12"><label class="labels">Mot de passe</label><input type="text" class="form-control"  value=""></div>
                </div>
               
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Sauvegarder</button></div>
            </div>
        </div>
         
    </div>
</div>
</div>
</div>
</body>
</html>


