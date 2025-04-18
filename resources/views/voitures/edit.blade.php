@extends('layouts.app')
@section('content')

<form method="post" action="{{ route('voiture.update', $voiture->id) }}" class="form-control mx-auto w-50 mt-5 p-3 shadow">
@csrf
@method('PUT')
  <h2 class="text-center text-primary">Modifier une voiture</h2>
  <div class="mb-3">
    <label class="form-label">Marque</label>
    <input type="text" class="form-control" name="marque" value="{{ $voiture->marque }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Modèle</label>
    <input type="text" class="form-control" name="modele" value="{{ $voiture->modele }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Matricule</label>
    <input type="text" class="form-control" name="matricule" value="{{ $voiture->matricule }}">
  </div>
  <div class="mb-3 text-center">
    <button type="submit" class="btn btn-lg btn-primary">Modifier</button>
  </div>
</form>
@endsection
