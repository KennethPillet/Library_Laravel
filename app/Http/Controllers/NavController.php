<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

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
        return view('add');
    }
    public function modifyBook($id){
        //dd($book);
        $book = Book::getOneBook($id);
        return view('modify', ['book'=> $book]);
    }
}
