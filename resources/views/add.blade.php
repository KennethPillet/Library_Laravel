@extends('layouts.base'){{-- recherche le fichier base dans layouts --}}

@section('title', 'Ajouter') {{-- le deuxieme argument ser celui remplacer dans le 'yield' du fichier de extends --}}
@section('css')
    <link rel="stylesheet" href="{{ url('css/add.css')}}">
@endsection
@section('content')
    <h1>Ajouter des livres</h1>
    <form action="{{ url('users') }}" method="POST">
        @csrf
        <label for="nom">Entrez le nom de votre livre : </label>
        <input type="text" name="nom" id="nom">
        <input type="submit" value="Envoyer !">
    </form>
@endsection {{-- pour ecrire du html proprement entre la "section" --}}

