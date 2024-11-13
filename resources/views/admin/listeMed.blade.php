

<hr>
<!-- rdv liste -->
@php
    $ide = 1;
@endphp

<h4 class="text-center text-primary">Listes des medecins</h4>
<hr>
<a class="text-primary" href="#">Gerer</a>
<hr>
<div class="row">
<table class="table text-dark">
  <thead>
    <tr>
    <th>Id</th>
      <th>Nom</th>
      <th>Code etablissement</th>
      <th>Specialite</th>
      <th>Email</th>
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
      <td>{{$user->specialite}}</td>
      <td>{{$user->email}}</td>
      <td>
        <a href="#" class="text-danger">Supprimer</a>
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

