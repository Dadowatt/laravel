@extends('layouts.app')
@section('content')

<div class="container">
<div class="card mt-5">
    <h3 class="card-header">Voiture numéro {{ $voiture->id }}</h3>
    <div class="card-body">
    <p class="card-text"><span class="fw-bold">Marque : </span> {{ $voiture->marque }}</p>
    <p class="card-text"><span class="fw-bold">Modèle : </span>{{ $voiture->modele }}</p>
    <p class="card-text"><span class="fw-bold">Matricule :</span> {{ $voiture->matricule }}</p>
    </div>
</div>
</div>

@endsection