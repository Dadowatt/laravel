@extends('layouts.app')
@section('content')

<div class="container">
<div class="card mt-5">
    <h3 class="card-header">personne numéro {{ $pointage->id }}</h3>
    <div class="card-body">
    <p class="card-text"><span class="fw-bold">nom :</span> {{ $pointage->nom }}</p>
    <p class="card-text"><span class="fw-bold">prenom :</span>{{ $pointage->prenom }}</p>
    <p class="card-text"><span class="fw-bold">grade :</span> {{ $pointage->grade }}</p>
    </div>
</div>
</div>

@endsection