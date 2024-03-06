<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoorController;
use App\Http\Controllers\backend\BookController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
   // return view('welcome');
//});

// Route::get('/',[DoorController::class,'indexz'])->name('post');
//Route::post('/',[DoortController::class,'store'])->name('store');
Route::get('book/index',[BookController::class,'index'])->name('book.index');
Route::get('book/craete',[BookController::class,'create'])->name('book.create');
Route::post('book/store',[BookController::class,'store'])->name('book.store');
Route::get('book/edit/{id}',[BookController::class,'edit'])->name('book.edit');
Route::post('book/update/{id}',[BookController::class,'update'])->name('book.update');
Route::get('book/delete/{id}',[BookController::class,'destroy'])->name('book.destroy');




