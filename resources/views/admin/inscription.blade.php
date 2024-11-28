<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Register Form</title>
    <style>
        /* Styles pour centrer le formulaire verticalement et horizontalement */
        html, body {
            height: 100%;
            margin: 0;
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
        label {
            font-weight: bold;
        }
        input {
            margin-bottom: 15px;
        }
        button {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <form  action="{{ route('registerAdmin') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Nom utilisateur</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">S'enregistrer</button>
        </form>
    </div>
</body>
</html>
