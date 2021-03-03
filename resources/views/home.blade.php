@extends('layouts.base'){{-- recherche le fichier base dans layouts --}}

@section('title', 'Accueil') {{-- le deuxieme argument ser celui remplacer dans le 'yield' du fichier de extends --}}
@section('css')
    <link rel="stylesheet" href="{{ url('css/home.css')}}">
@endsection

@section('content')
    <section>
        <h1>Bienvenu</h1>
        <div class="intro">
            <p>Ceci un site codé en formation It Akademy afin d'exercer avec le framework PHP Laravel</p> <br>
            <p>Nous allons présenter quelques livres, ainsi que la possibilité d'en rajouter, tout ayant la possibilité d'avoir des détails sur chaque livre</p> <br>
        </div>
        <div  class="library">
            <img src="img/freebie_stacked_books_png_overlay_by_lewis4721_dcaf95j-fullview.png" alt="">
        </div>
        
    </section>
    <aside>
        <h3>Aside</h3>
    </aside>
@endsection {{-- pour ecrire du html proprement entre la "section" --}}

