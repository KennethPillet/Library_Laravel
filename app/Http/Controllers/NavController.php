<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function home(){
        return view('home');
    }
    public function list(){
        return view('list');
    }
    public function add(){
        return view('add');
    }
}
