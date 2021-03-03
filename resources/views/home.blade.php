@extends('layouts.base'){{-- recherche le fichier base dans layouts --}}

@section('title', 'Accueil') {{-- le deuxieme argument ser celui remplacer dans le 'yield' du fichier de extends --}}
@section('content')
<h1>Bienvenu</h1>
<p>Ceci un site coder en formation It Akademy afin d'exercer avec Laravel</p>

@endsection {{-- pour ecrire du html proprement entre la "section" --}}

