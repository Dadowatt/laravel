@extends('layouts.app')
@section('content')

<div class="container">
  <a href="{{ route('voiture.create') }}" class="btn btn-success">Ajouter</a>

  <table class="table table-bordered mt-5">
    <thead>
      <tr>
        <th>ID</th>
        <th>Marque</th>
        <th>Modèle</th>
        <th>Matricule</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($voitures as $voiture)
      <tr>
        <td>{{ $voiture->id }}</td>
        <td>{{ $voiture->marque }}</td>
        <td>{{ $voiture->modele }}</td>
        <td>{{ $voiture->matricule }}</td>
        <td>
          <a href="" class="btn btn-success">Éditer</a>
          <a href="" class="btn btn-warning">Détails</a>
          <a href="" class="btn btn-danger">Supprimer</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
