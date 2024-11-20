<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<!-- Bootstrap JavaScript Bundle (incluant Popper.js pour les modaux) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-dark-900 dark:text-dark-100">
                <h2 class="text-blue-500">Liste des rendez-vous</h2>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nom_patient</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Date</th>
                        <th scope="col">Heure</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($appointments as $rdv)
                        <tr>
                            <td>{{ $rdv->id }}</td>
                            <td>{{ $rdv->nom_patient }}</td>
                            <td>{{ $rdv->telephone }}</td>
                            <td>{{ $rdv->date }}</td>
                            <td>{{ $rdv->heure }}</td>
                            <td>{{ $rdv->email_patient }}</td>
                            <td>
                                @if($rdv->statut == 'en attente')
                                    <!-- Boutons d'actions visibles seulement si le statut est 'en attente' -->
                                    <a href="{{ route('accepter.rdv', $rdv->id) }}" class="btn btn-success">
                                        <i class="bi bi-check2"></i> Accepter
                                    </a>
                                    
                                    <!-- Bouton Refus -->
                                    <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#refusModal{{ $rdv->id }}">
                                        <i class="bi bi-x"></i> Refuser
                                    </a>
                                    <!-- Bouton Report -->
                                    <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#reportModal{{ $rdv->id }}">
                                        <i class="bi bi-clock"></i> Reporter
                                    </a>
                                    
                                    
                                   

                                    <!-- Modal de refus -->
                                    <div class="modal fade" id="refusModal{{ $rdv->id }}" tabindex="-1" aria-labelledby="refusModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="{{ route('refuser.rdv', $rdv->id) }}" method="POST">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="refusModalLabel">Refuser le rendez-vous</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <label for="email_patient">Email du patient</label>
                                                        <input type="email" name="email_patient" class="form-control" value="{{ $rdv->email_patient }}" required>
                                                        <label for="raison_refus" class="mt-2">Raison d'annulation</label>
                                                        <textarea name="raison_refus" class="form-control" rows="3" required></textarea>
                                                    </div>
                                                    
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                        <button type="submit" class="btn btn-danger">Confirmer le refus</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                
                                     <!-- Modal de refus -->
                                     <div class="modal fade" id="reportModal{{ $rdv->id }}" tabindex="-1" aria-labelledby="reportModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="{{ route('reporter.rdv', $rdv->id) }}" method="POST">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="reportModalLabel">Reporter le rendez-vous</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <label for="email_patient">Email du patient</label>
                                                        <input type="email" name="email_patient" class="form-control" value="{{ $rdv->email_patient }}" required>
                                                        <label for="date_report" class="mt-2">Date report</label>
                                                        <input name="date_report" type="date" class="form-control" rows="3" required></input>
                                                        <label for="heure_report" class="mt-2">Heure report</label>
                                                        <input name="heure_report" type="time" class="form-control" rows="3" required></input>
                                                    </div>
                                                    
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                        <button type="submit" class="btn btn-warning">Confirmer le report</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                

                                @elseif($rdv->statut == 'accepté')
                                    <span class="badge bg-success">Accepté</span>

                                @elseif($rdv->statut == 'refusé')
                                    <span class="badge bg-danger">Refusé</span>
                                @elseif($rdv->statut == 'reporté')
                                    <span class="badge bg-warning">Reporté</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
