<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Author;

class Book extends Model
{
    public static function getOneBook($id){
        return  Book::find($id);
    }
    public static function add($request){
        $book = new Book;
        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->description = $request->description;
        $book->genres()->attach($request->genres);
        $book->pages_nb = $request->pages_nb;
        $book->publication_year = $request->publication_year;
        $book->save();
        return;
    }
    public static function deleteOneBook($id){
        $book = Book::find($id);
        $book->genres()->detach();
        $book->delete();
        //Book::destroy($request->id);
        return;
    }
    public static function modifyOneBook($request){
        $book = Book::find($request->id);
        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->description = $request->description;
        $book->genres()->sync($request->genres);
        $book->pages_nb = $request->pages_nb;
        $book->publication_year = $request->publication_year;
        $book->save();
        return;
    }
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}

