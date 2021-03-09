<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public static function getOneBook($id){
        return  Book::find($id);
    }
    public static function add($request){
        $book = new Book;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->description = $request->description;
        $book->genre = $request->genre;
        $book->pages_nb = $request->pages_nb;
        $book->publication_year = $request->publication_year;
        $book->save();
        return;
    }
    public static function deleteOneBook($id){
        return Book::destroy($id);
    }
    public static function modifyOneBook($request){
        $book = Book::find($request->id);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->description = $request->description;
        $book->genre = $request->genre;
        $book->pages_nb = $request->pages_nb;
        $book->publication_year = $request->publication_year;
        $book->save();
        return;
    }
}

