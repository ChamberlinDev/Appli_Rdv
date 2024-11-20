<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<table class="table">
    <thead >
        <tr>
            <th scope="col">Jour de début</th>
            <th scope="col">Jour de fin</th>
            <th scope="col">Heure de début</th>
            <th scope="col">Heure de fin</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @if(!empty($agendas) && count($agendas) > 0)
            @foreach($agendas as $agenda)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($agenda->jour_debut)->format('d/m/Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($agenda->jour_fin)->format('d/m/Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($agenda->heure_debut)->format('H:i') }}</td>
                    <td>{{ \Carbon\Carbon::parse($agenda->heure_fin)->format('H:i') }}</td>
                    <td>
                        <a href="{{ route('agenda.edit', $agenda->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <a href="{{ route('agenda.delete', $agenda->id) }}" class="btn btn-danger btn-sm">Supprimer</a>

                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5" class="text-center">Aucun agenda disponible.</td>
            </tr>
        @endif
    </tbody>
</table> -->
