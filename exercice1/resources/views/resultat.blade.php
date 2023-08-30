@extends('master')
@section('contenu')
    @if (isset($resultat))
        <h1>Identité</h1>
        <h3>Votre nom complet est : {{ $resultat }}</h3>
    @endif
@endsection