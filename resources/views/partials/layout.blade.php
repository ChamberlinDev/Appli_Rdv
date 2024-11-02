<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

    <title>RdvMedical</title>
</head>
<body>
    <hr>
<section id="about">
            <div class="container px-4 text-dark">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h4>Trouver un medecin</h4>
                        <form class="d-flex align-items-center">
                            <input type="text" name="nom" class="form-control form-control me-2" placeholder="spécialité, nom, adresse..." >
                            <a class="btn btn-primary" href="#">Rechercher</a>
                        </form>
                    </div>
                    
                </div>
                <hr>
                @php
                $ide=1;
                @endphp
            @foreach($users as $user)
            <div class="card col-8 d-flex align-items p-3">
                 <i class="bi bi-person-circle fa-3x me-5"></i> 
                 <div>
                <h6 class="text-primary">{{$user->nom}} {{$user->prenom}}</h6>
                <p>Email: {{$user->email}}</p>
                <p>Téléphone: {{$user->telephone}}</p>
                <p>Rôle: {{$user->role}}</p>
                <a href="#" class="btn btn-primary">Prendre rdv</a>
            </div>
            </div>
                    
            <hr>
             @php
            $ide+=1;
            @endphp
           @endforeach
            </div>
        </section>
        <section id="about">
            <div class="container px-2 text-dark">
                <div class="row gx-4 justify-content">
             
                   
                </div>
            </div>
        </section>
       
        <section id="about">
            <div class="container px-4 text-dark">
                <div class="row gx-4 justify-content-center">
                    <div>

                    </div>
                </div>
            </div>
        </section>
        <section id="about">
            <div class="container px-4 text-dark">
                <div class="row gx-4 justify-content">
                    <div class="card">
                      <p></p>
                    </div>
                </div>
            </div>
        </section>
       
</body>
</html>