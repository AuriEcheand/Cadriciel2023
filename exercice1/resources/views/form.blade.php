@extends('master')
@section('contenu')

<form action="/form" method="post">
@csrf
<label for="nom">Nom :</label>
<input type="text" name="nom">
<label for="prenom">Prénom :</label>
<input type="text" name="prenom">
<button type="submit">Valider</button>
</form>
@endsection
