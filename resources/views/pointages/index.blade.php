@extends('layouts.app')
@section('content')

<div class="container">
<a href="{{ route('pointage.create') }}" class="btn btn-success">Ajouter</a>
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
            <a href="" class="btn btn-success">editer</a>
            <a href="" class="btn btn-warning">details</a>
            <a href="" class="btn btn-danger">delete</a>
        </td>
    </tr>

    @endforeach
  </tbody>
</table>
</div>
@endsection