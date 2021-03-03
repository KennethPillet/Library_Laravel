@extends('layouts.base'){{-- recherche le fichier base dans layouts --}}

@section('title', 'Ajouter') {{-- le deuxieme argument ser celui remplacer dans le 'yield' du fichier de extends --}}
@section('css')
    <link rel="stylesheet" href="{{ url('css/add.css')}}">
@endsection
@section('content')
<h1>Ajouter des livres</h1>

@endsection {{-- pour ecrire du html proprement entre la "section" --}}

