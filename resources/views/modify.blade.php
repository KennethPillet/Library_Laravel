@extends('layouts.base'){{-- recherche le fichier base dans layouts --}}

@section('title', 'Modification') {{-- le deuxieme argument ser celui remplacer dans le 'yield' du fichier de extends --}}
@section('css')
    <link rel="stylesheet" href="{{ url('css/list.css')}}">
@endsection

@section('content')
    <section>
        <div class="card">
            <h1>Modifications du livre</h1>
            <form action="/modifyBook/{{ $book->id }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="title">Titre</label>
                    <div class=" col-sm-5">
                        <input type="text" id="title" name="title" value="{{ $book->title }}" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="author">Auteur</label>
                    <div class=" col-sm-5">
                        <input type="text" id="author" name="author" value="{{ $book->author }}"class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="genre">Genre</label>
                    <div class=" col-sm-5">
                        <input type="text" id="genre" name="genre" value="{{ $book->genre }}"class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="publication_year">Année</label>
                    <div class=" col-sm-5">
                        <input type="number" id="publication_year" name="publication_year" value="{{ $book->publication_year }}"class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" or="pages_nb">Pages</label>
                    <div class=" col-sm-5">
                        <input type="number" id="pages_nb" name="pages_nb" value="{{ $book->pages_nb }}"class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="description">Synopsis</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Résumé" rows="5">{{ $book->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-outline-secondary"><i class="bi bi-save"></i></button>
            </form>
        </div>
        @endsection {{-- pour ecrire du html proprement entre la "section" --}}
        
        
        {{-- <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Auteur</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Année</th>
                        <th scope="col">Pages</th>
                        <th scope="col">Synopsis</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <form action="/modifyBook/{{ $book->id }}" method="POST">
                            @csrf
                            <th scope="row">{{ $book->id }}</th>
                            <td>
                                <input type="text" id="title" name="title" value="{{ $book->title }}">
                            </td>
                            <td>
                                <input type="text" id="author" name="author" value="{{ $book->author }}">
                            </td> 
                            <td>
                                <input type="text" id="genre" name="genre" value="{{ $book->genre }}">
                            </td>
                            <td>
                                <input type="number" id="publication_year" name="publication_year" value="{{ $book->publication_year }}">
                            </td>
                            <td>
                                <input type="number" id="pages_nb" name="pages_nb" value="{{ $book->pages_nb }}">
                            </td>
                            <td>
                                <textarea  id="description" name="description" rows="10">{{ $book->description }}</textarea>
                            </td>
                            
                            <td>
                                <button type="submit" class="btn btn-outline-secondary"><i class="bi bi-save"></i></button>
                            </td>
                        </form>
                    </tr>
                </tbody>
            </table>
        </div> --}}