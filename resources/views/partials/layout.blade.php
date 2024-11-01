<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <div class="card">
                      <h6>Nom: {{$user->nom}}</h6>
                      <h6>prenom: {{$user->prenom}}</h6>
                      <h6>email: {{$user->email}}</h6>
                      <h6>telephone: {{$user->telephone}}</h6>
                      <h6>role: {{$user->role}}</h6>
                    </div>
                    <a href="{{route('rdv')}}" class="btn btn-primary">Prendre rdv</a>
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