@extends('layouts.base'){{-- recherche le fichier base dans layouts --}}

@section('title', 'Liste') {{-- le deuxieme argument ser celui remplacer dans le 'yield' du fichier de extends --}}
@section('css')
    <link rel="stylesheet" href="{{ url('css/list.css')}}">
@endsection
@section('content')
<h1>Liste de livres</h1>

<img src="img/ultimate_snaker_ book.jpg" alt="">
@endsection {{-- pour ecrire du html proprement entre la "section" --}}

