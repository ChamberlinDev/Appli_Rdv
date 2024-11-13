<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Login Form</title>
    <style>
        /* Styles pour centrer le formulaire verticalement et horizontalement */
        html, body {
            height: 100%;
        }
        .container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form {
            width: 100%;
            max-width: 400px; /* Limite la largeur du formulaire */
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="POST" action="{{ route('loginAd') }}">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Nom utilisateur</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Se connecter</button>
            <!-- <a href="{{route('registerView')}}" >je n'ai pas de compte</a> -->
        </form>
    </div>
</body>
</html>
