@extends('layouts.base'){{-- recherche le fichier base dans layouts --}}

@section('title', 'Liste') {{-- le deuxieme argument ser celui remplacer dans le 'yield' du fichier de extends --}}
@section('css')
    <link rel="stylesheet" href="{{ url('css/list.css')}}">
@endsection
@section('content')
    <h1 class="bubble">Liste de livres</h1>
    <div class="bubble">
        <p>Bonjour {{$name}} tu trouvera ci-dessous des livres random</p>
    </div>
    <div class="contentImg">
        <img src="img/ultimate_snaker_ book.jpg" alt="">
    </div>
    <div class="listOfBooks">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Année</th>
                    <th scope="col">Modif</th>
                    <th scope="col">Suppr</th>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <th scope="row">{{ $book->id }}</th>
                        <td><a href="/book/{{ $book->id }}">{{ $book->title }}</a></td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->genre }}</td>
                        <td>{{ $book->publication_year }}</td>
                        <td><a href="/modifyBook/{{ $book->id }}" class="btn btn-outline-secondary"><i type="submit" class="bi bi-arrow-repeat"></i></a></td>
                        <td>    
                            <form action="/deleteBook" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $book->id }}">
                                <button type="submit" class="btn btn-outline-secondary"><i type="submit" class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection {{-- pour ecrire du html proprement entre la "section" --}}
