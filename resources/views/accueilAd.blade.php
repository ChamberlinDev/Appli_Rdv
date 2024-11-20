<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    <h2 class="text-primary">Agenda medecin</h2>

    <form action="{{ route('agenda.store') }}" method="POST">
        @csrf
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <div class="row">
            <!-- Sélection de la date début -->
            <div class="col-md-6">
                <div class="form-group">
                <label for="jour_debut" class="form-label">Jour d'ouverture</label>
                <input type="date" id="jour_debut" name="jour_debut" class="form-control" required>
                </div>
            </div>

            <!-- Sélection de la date fin -->
            <div class="col-md-6">
                <div class="form-group">
                <label for="jour_fin" class="form-label">Jour de fermeture</label>

                    <input type="date" id="jour_fin" name="jour_fin" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Sélection de l'heure début -->
            <div class="col-md-6">
                <div class="form-group">
                <label for="heure_fin" class="form-label">Heure d'ouverture</label>
                    <input type="time" id="heure_debut" name="heure_debut" class="form-control" required>
                </div>
            </div>

            <!-- Sélection de l'heure fin -->
            <div class="col-md-6">
                <div class="form-group">
                <label for="heure_fin" class="form-label">Heure de fermeture</label>
                    <input type="time" id="heure_fin" name="heure_fin" class="form-control"  required>
                </div>
            </div>
        </div>

        <!-- Submit -->
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
