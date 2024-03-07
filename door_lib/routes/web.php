<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoorController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\AuthorController;
use App\Http\Controllers\backend\PublisherController;
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

Route::get('category/index',[CategoryController::class,'index'])->name('category.index');
Route::get('category/craete',[CategoryController::class,'create'])->name('category.create');
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('category/delete/{id}',[CategoryController::class,'destroy'])->name('category.destroy');


// Route::resource('books', BookController::class);

Route::get('/',[DoorController::class,'index']);
Route::get('author/index', [AuthorController::class, 'index'])->name('author.index');



Route::get('/publisher/index',[PublisherController::class,'index'])->name('publisher.index');
Route::get('/publisher/create',[PublisherController::class,'create'])->name('publisher.create');
Route::post('/publisher/store',[PublisherController::class,'store'])->name('publisher.store');
Route::get('/publisher/edit/{id}',[PublisherController::class,'edit'])->name('publisher.edit');


Route::post('/publisher/update/{id}',[PublisherController::class,'update'])->name('publisher.update');

Route::get('/dashboard/index',[PublisherController::class,'index_dash'])->name('dashboard.index');
Route::get('/publisher/delete/{id}', [PublisherController::class, 'delete'])->name('publisher.delete');
