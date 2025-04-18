@extends('layouts.app')
@section('content')

<div class="container">
<a href="{{ route('pointage.create') }}" class="btn btn-success mt-3">Ajouter</a>
<table class="table table-bordered mt-5">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Grade</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($pointages as $pointage)
    <tr>
      <th scope="row">{{ $pointage->id }}</th>
      <td>{{ $pointage->nom }}</td>
      <td>{{ $pointage->prenom }}</td>
      <td>{{ $pointage->grade }}</td>
      <td>
            <a href="{{ route('pointage.edit', $pointage->id) }}" class="btn btn-success">editer</a>
            <a href="{{ route('pointage.show', $pointage->id) }}" class="btn btn-warning mx-2">detail</a>

            <form class="d-inline" action="{{ route('pointage.destroy', $pointage->id) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">supprimer</button>
            </form>
        </td>
    </tr>

    @endforeach
  </tbody>
</table>
</div>
@endsection