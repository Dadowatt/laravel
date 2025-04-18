@extends('layouts.app')
@section('content')

<form method="post" action="{{ route('pointage.update', $pointage->id) }}" class="form-control mx-auto w-50 mt-5 p-3 shadow">
  @csrf
  @method('PUT')
  <h2 class="text-center text-primary">Editer une personne</h2>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom</label>
    <input type="text" class="form-control" name="nom" value="{{$pointage->nom}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">prénom</label>
    <input type="text" class="form-control" name="prenom" value="{{$pointage->prenom}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Grade</label>
    <input type="text" class="form-control" name="grade" value="{{$pointage->grade}}">
  </div>
  <div class="mb-3 text-center">
  <button type="submit" class="btn btn-lg btn-primary">Editer</button>
  </div>
</form>
@endsection