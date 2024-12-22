

<hr>
<!-- rdv liste -->
@php
    $ide = 1;
@endphp

<h4 class="text-center text-primary">Listes des medecins</h4>
<hr>
<!-- <a class="text-primary" href="#">Gerer</a> -->
<hr>
<div class="row">
  <a class="btn btn-primary" href="{{route('ajoutm')}}">Ajouter medecin</a>
<table class="table text-dark">
  <thead>
    <tr>
    <th>Id</th>
      <th>Nom du medecin</th>
      <th>Code etablissement</th>
      <th>Nom etablissement</th>
      <th>Specialite</th>
      <th>Email</th>
      <th>Disponibilité</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user) 
      <tr>
        <!-- Affichage de l'incrémentation du compteur $ide -->
        <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->code_etablissement}}</td>
      <td>{{$user->nom_etablissement}}</td>
      <td>{{$user->specialite}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->disponibilite}}</td>
      <td>
      <a href="{{ route('admin.delete', $user->id) }}" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">Supprimer</a>

      </td>


    </tr>
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

