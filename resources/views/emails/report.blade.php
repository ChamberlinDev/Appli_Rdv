<!DOCTYPE html>
<html>
<head>
    <title>Rendez-vous reporté</title>
</head>
<body>
    <p>Bonjour {{ $nom_patient }},</p>

    <p>Votre rendez-vous prévu initialement le {{ $date }} a été reporté.</p>

    <p><strong>Nouvelle date :</strong> {{ $date_report }}</p>
    <p><strong>Nouvelle heure :</strong> {{ $heure_report }}</p>

    <p>Nous vous remercions de votre compréhension.</p>

    <p>Cordialement,</p>
    <p>{{ $nom_medecin }}</p>
</body>
</html>
