<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;

class BookController extends Controller
{
    public static function add(Request $request){
        //dd($request);
        Book::add($request);

        return redirect('/list');
    }
    public static function delete(Request $request){
        //dd($request);
        Book::deleteOneBook($request->id);

        return redirect('/list');
    }
    public static function modify(Request $request){
        //dd($request);
        Book::modifyOneBook($request);

        return redirect('/list');
    }
}