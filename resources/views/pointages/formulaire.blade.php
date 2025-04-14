@extends('layouts.app')
@section('content')

<form method="post" action="{{ route('pointage.store') }}" class="form-control mx-auto w-50 mt-5 p-3 shadow">
  @csrf
  <h2 class="text-center text-primary">Ajouter une personne</h2>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom</label>
    <input type="text" class="form-control" name="nom">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">prénom</label>
    <input type="text" class="form-control" name="prenom">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Grade</label>
    <input type="text" class="form-control" name="grade">
  </div>
  <div class="mb-3 text-center">
  <button type="submit" class="btn btn-lg btn-primary">Ajouter</button>
  </div>
</form>
@endsection