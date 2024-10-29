@include('partials.navbar')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Connexion</title>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="w-50">
        @if(session('success'))
            <div class="alert alert-success" id="success-alert">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger text-center">
                {{ session('error') }}
            </div>
        @endif

        <form class="form-control" action="{{route('login_save')}}" method="POST">
            @csrf
            
            <div class="text-center mt-3">
                <h3>CONNEXION</h3>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Adresse email</label>
                <input type="email" name="email" class="form-control form-control-sm" placeholder="Entrer votre email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" name="password" class="form-control form-control-sm" placeholder="Entrer votre mot de passe ">
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
            <div class="text-center">
                <span>Je n'ai pas de compte! <a href="{{route('registreView')}}">S'inscrire</a></span>
            </div>
        </form>
    </div>
</div>

<script>
    // Vérification si l'alerte de succès existe
    const successAlert = document.getElementById('success-alert');
    if (successAlert) {
        // Masquez l'alerte après 5 secondes
        setTimeout(() => {
            successAlert.style.display = 'none';
        }, 2000);
    }
</script>

</body>

</html>
@include('partials.footer')
