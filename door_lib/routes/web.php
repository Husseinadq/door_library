<?php

use App\Http\Controllers\backend\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoorController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\AuthorController;
use App\Http\Controllers\backend\PublisherController;
use App\Http\Controllers\backend\BookController;
use App\Http\Controllers\HomeController;

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
<<<<<<< HEAD

Route::get('book/index',[BookController::class,'index'])->name('book.index');
Route::get('book/craete',[BookController::class,'create'])->name('book.create');
Route::post('book/store',[BookController::class,'store'])->name('book.store');
Route::get('book/edit/{id}',[BookController::class,'edit'])->name('book.edit');
Route::post('book/update/{id}',[BookController::class,'update'])->name('book.update');
Route::get('book/delete/{id}',[BookController::class,'destroy'])->name('book.destroy');
=======
Route::get('book/index', [BookController::class, 'index'])->name('book.index');
Route::get('book/craete', [BookController::class, 'create'])->name('book.create');
Route::post('book/store', [BookController::class, 'store'])->name('book.store');
Route::get('book/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
Route::post('book/update/{id}', [BookController::class, 'update'])->name('book.update');
Route::get('book/delete/{id}', [BookController::class, 'destroy'])->name('book.destroy');
>>>>>>> 5faddf16da77373fd16bc48b8f8a8d9f47784a49

Route::get('category/index', [CategoryController::class, 'index'])->name('category.index');
Route::get('category/craete', [CategoryController::class, 'create'])->name('category.create');
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');


// Route::resource('books', BookController::class);

Route::get('/', [DoorController::class, 'index']);
Route::get('author/index', [AuthorController::class, 'index'])->name('author.index');





Route::group(
   ['middleware' => 'guest'],
   function () {

      Route::get('/register', [AuthController::class, 'register'])->name('register');
      Route::post('/register', [AuthController::class, 'registerPost'])->name('register');

      Route::get('/login', [AuthController::class, 'login'])->name('login');
      Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
   }
);


Route::group(['middleware' => 'auth'], function () {
   Route::get('/dashboard/index', [PublisherController::class, 'index_dash'])->name('dashboard.index');


   Route::get('/home', [HomeController::class, 'index']);
   Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');


   

Route::get('/publisher/index', [PublisherController::class, 'index'])->name('publisher.index');
Route::get('/publisher/create', [PublisherController::class, 'create'])->name('publisher.create');
Route::post('/publisher/store', [PublisherController::class, 'store'])->name('publisher.store');
Route::get('/publisher/edit/{id}', [PublisherController::class, 'edit'])->name('publisher.edit');


Route::post('/publisher/update/{id}', [PublisherController::class, 'update'])->name('publisher.update');

Route::get('/publisher/delete/{id}', [PublisherController::class, 'delete'])->name('publisher.delete');

<<<<<<< HEAD
// Author
Route::get('author', [AuthorController::class, 'index'])->name('author.index');
Route::get('author/create', [AuthorController::class, 'create']) ->name('author.create');
Route::post('author/create', [AuthorController::class, 'store']);
Route::get('author/{id}/edit', [AuthorController::class, 'edit']);
Route::put('author/{id}/edit', [AuthorController::class,'update']);
Route::get('author/{id}/delete', [AuthorController::class,'destory'] )->name('author.delete');
=======
});
>>>>>>> 5faddf16da77373fd16bc48b8f8a8d9f47784a49
