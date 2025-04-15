@extends('layouts.app')
@section('content')

<div class="container">
  <a href="{{ route('voiture.create') }}" class="btn btn-success">Ajouter</a>
  <table class="table table-bordered mt-5">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Marque</th>
        <th scope="col">Modèle</th>
        <th scope="col">Matricule</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($voitures as $voiture)
      <tr>
        <th scope="row">{{ $voiture->id }}</th>
        <td>{{ $voiture->marque }}</td>
        <td>{{ $voiture->modele }}</td>
        <td>{{ $voiture->matricule }}</td>
        <td>
          <a href="#" class="btn btn-success">editer</a>
          <a href="#" class="btn btn-warning">details</a>
          <a href="#" class="btn btn-danger">delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
