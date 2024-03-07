<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoorController;
use App\Http\Controllers\backend\AuthorController;
use App\Http\Controllers\backend\PublisherController;
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
