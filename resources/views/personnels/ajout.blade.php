@extends('partials.layout')
@section('content')
<form>
  <div class="form-group">
    <label for="objet">Objet du rendez-vous</label>
    <input type="text" class="form-control" id="objet"  placeholder="Entrer l'objet du rendez-vous">
  </div>
  <div class="form-group">
    <label for="contact">email ou numero telephone</label>
    <input type="text" class="form-control" id="contact">
  </div>
  <div class="form-group">
    <label for="contact">....</label>
    <input type="text" class="form-control" id="contact">
  </div>
 
  <button type="submit" class="btn btn-primary">Soumettre</button>
</form>
@endsection