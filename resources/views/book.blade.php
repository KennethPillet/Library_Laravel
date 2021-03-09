@extends('layouts.base'){{-- recherche le fichier base dans layouts --}}

@section('title', 'Livre') {{-- le deuxieme argument ser celui remplacer dans le 'yield' du fichier de extends --}}
@section('css')
    <link rel="stylesheet" href="{{ url('css/list.css')}}">
@endsection

@section('content')
    <section>
        <div class="card">
            <h1>Détail du livre</h1>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Auteur</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Année</th>
                            <th scope="col">Pages</th>
                            <th scope=col">Synopsis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{ $book->id }}</th>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->genre }}</td>
                            <td>{{ $book->publication_year }}</td>
                            <td>{{ $book->pages_nb }}</td>
                            <td>{{ $book->description }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
@endsection {{-- pour ecrire du html proprement entre la "section" --}}

