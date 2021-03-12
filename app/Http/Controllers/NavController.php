<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;

class NavController extends Controller
{
    public function home(){
        return view('home');
    }
    public function list(){
        //dd($books);
        $books = Book::all(); //find cherche TOUT dans ta basse de donnée 
        return view('list',['name' => 'Kenneth'], ['books'=> $books]);
    }
    public function book($id){
        //dd($book);
        $book = Book::getOneBook($id); //find cherche dans ta basse de donnée un seul
        return view('book', ['book'=>$book]);
    }
    public function add(){
        $authors = Author::all()->sortBy('name');
        $genres = Genre::all()->sortBy('name');
        return view('add', ['authors' => $authors, 'genres' => $genres]);
    }
    public function modifyBook($id){
        //dd($book);
        $book = Book::getOneBook($id);
        $authors = Author::all()->sortBy('name');
        $genres = Genre::all()->sortBy('name');
        return view('modify', ['book' => $book, 'authors' => $authors, 'genres' => $genres]);
    }
}
