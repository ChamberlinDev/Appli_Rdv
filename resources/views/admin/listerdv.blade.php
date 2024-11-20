
<hr>
<!-- rdv liste -->
@php
    $ide = 1;
@endphp
<h4 class="text-center text-primary">Historique de rendez-vous</h4>

<div class="row">
<table class="table text-dark">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nom_patient</th>
      <th>Telephone</th>
      <th>Date</th>
      <th>Heure</th>
      <th>Nom_medecin</th>
      <th>Specialite</th>
      <th>Email_medecin</th>
      <th>Email_patient</th>
      <th>Statut</th>
    </tr>
  </thead>
  <tbody>
    @foreach($appointments as $rdv)
      <tr class="text-dark">
        <!-- Affichage de l'incrémentation du compteur $ide -->
        <td>{{ $ide }}</td>
        <td>{{ $rdv->nom_patient }}</td>
        <td>{{ $rdv->telephone }}</td>
        <td>{{ $rdv->date }}</td>
        <td>{{ $rdv->heure }}</td>
        <td>{{ $rdv->nom_medecin }}</td>
        <td>{{ $rdv->specialite }}</td>
        <td>{{ $rdv->email_medecin }}</td>
        <td>{{ $rdv->email_patient }}</td>
        <td>{{ $rdv->statut }}</td>
      </tr>
      <!-- Incrémentation de la variable $ide après chaque itération -->
      @php
          $ide++;
      @endphp
    @endforeach
  </tbody>
</table>
</div>
<!-- Pagination -->
<div class="pagination">
    {{ $appointments->links() }}
</div>
