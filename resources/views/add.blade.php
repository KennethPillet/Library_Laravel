@extends('layouts.base'){{-- recherche le fichier base dans layouts --}}

@section('title', 'Ajouter') {{-- le deuxieme argument ser celui remplacer dans le 'yield' du fichier de extends --}}
@section('css')
    <link rel="stylesheet" href="{{ url('css/add.css')}}">
@endsection
@section('content')
    <h1>Ajouter des livres</h1>
    <div class="addForm">
        <form action="/add" method="POST">
            @csrf
            <label for="nom">Entrez le nom de votre livre : </label>
            <div class="row">
                <div class="col">
                  <input type="text" class="form-control" id="title" name="title" placeholder="Titre">
                </div>
                <div class="col">
                  <input type="text" class="form-control" id="author" name="author" placeholder="Auteur">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                  <input type="number" class="form-control" id="publication_year" name="publication_year" placeholder="Année de Publication">
                </div>
                <div class="col">
                    <input type="number" class="form-control" id="pages_nb" name="pages_nb" placeholder="Nombre de Pages">
                </div>
                <div class="col">
                  <input type="text" class="form-control" id="genre" name="genre" placeholder="Genre">
                </div>
            </div>
            <div class="form-group">
                <label for="description">Résumé</label>
                <textarea class="form-control" id="description" name="description" placeholder="Résumé" rows="3"></textarea>
            </div>
            <br>
            <input type="submit" class="btn btn-secondary" value="Envoyer !">
        </form>
    </div>

    
@endsection {{-- pour ecrire du html proprement entre la "section" --}}

