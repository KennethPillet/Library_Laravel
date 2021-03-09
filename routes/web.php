<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/home', function () {
    return view('home');
});
Route::get('/list', function () {
    return view('list');
});
Route::get('/add', function () {
    return view('add');
});
*/

Route::get('/', [NavController::class,'home']);
Route::get('/list', [NavController::class,'list']);
Route::get('/book/{id}', [NavController::class,'book']);
Route::get('/add', [NavController::class,'add']);
Route::post('/add', [BookController::class,'add']);
Route::post('/deleteBook', [BookController::class,'delete']);
Route::get('/modifyBook/{id}', [NavController::class,'modifyBook']);
Route::post('/modifyBook/{id}', [BookController::class,'modify']);