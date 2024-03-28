<?php

use App\Http\Controllers\backend\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoorController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\backend\PublisherController;
use App\Http\Controllers\backend\BookController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\WishlistController;

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
Route::get('book/index', [BookController::class, 'index'])->name('book.index');
Route::get('book/craete', [BookController::class, 'create'])->name('book.create');
Route::post('book/store', [BookController::class, 'store'])->name('book.store');
Route::get('book/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
Route::post('book/update/{id}', [BookController::class, 'update'])->name('book.update');
Route::get('book/delete/{id}', [BookController::class, 'destroy'])->name('book.destroy');

Route::get('book/index',[BookController::class,'index'])->name('book.index');
Route::get('book/craete',[BookController::class,'create'])->name('book.create');
Route::post('book/store',[BookController::class,'store'])->name('book.store');
Route::get('book/edit/{id}',[BookController::class,'edit'])->name('book.edit');
Route::post('book/update/{id}',[BookController::class,'update'])->name('book.update');
Route::get('book/delete/{id}',[BookController::class,'destroy'])->name('book.destroy');

Route::get('book/index', [BookController::class, 'index'])->name('book.index');
Route::get('book/craete', [BookController::class, 'create'])->name('book.create');
Route::post('book/store', [BookController::class, 'store'])->name('book.store');
Route::get('book/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
Route::post('book/update/{id}', [BookController::class, 'update'])->name('book.update');
Route::get('book/delete/{id}', [BookController::class, 'destroy'])->name('book.destroy');


Route::get('category/index', [CategoryController::class, 'index'])->name('category.index');
Route::get('category/craete', [CategoryController::class, 'create'])->name('category.create');
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

Route::get('wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
Route::get('wishlist/create', [WishlistController::class, 'create']) ->name('wishlist.create');
Route::post('wishlist/create', [WishlistController::class, 'store']);
Route::get('wishlist/{id}/edit', [WishlistController::class, 'edit']);
Route::put('wishlist/{id}/edit', [WishlistController::class,'update']);
Route::get('wishlist/{id}/delete', [WishlistController::class,'destory'] )->name('wishlist.delete');

Route::get('author', [AuthorController::class, 'index'])->name('author.index');
Route::get('author/create', [AuthorController::class, 'create']) ->name('author.create');
Route::post('author/create', [AuthorController::class, 'store']);
Route::get('author/{id}/edit', [AuthorController::class, 'edit']);
Route::put('author/{id}/edit', [AuthorController::class,'update']);
Route::get('author/{id}/delete', [AuthorController::class,'destory'] )->name('author.delete');


// Route::resource('books', BookController::class);

Route::get('/', [DoorController::class, 'index']);
Route::get('author/index', [AuthorController::class, 'index'])->name('author.index');





Route::group(
   ['middleware' => 'guest'],
   function () {



      Route::get('/login', [AuthController::class, 'login'])->name('login');
      Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
   }
);


Route::group(['middleware' => 'auth'], function () {
   Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');


   Route::get('/dashboard', [DashboardController::class, 'index']);
   Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');




Route::get('/publisher/index', [PublisherController::class, 'index'])->name('publisher.index');
Route::get('/publisher/create', [PublisherController::class, 'create'])->name('publisher.create');
Route::post('/publisher/store', [PublisherController::class, 'store'])->name('publisher.store');
Route::get('/publisher/edit/{id}', [PublisherController::class, 'edit'])->name('publisher.edit');


Route::post('/publisher/update/{id}', [PublisherController::class, 'update'])->name('publisher.update');

Route::get('/publisher/delete/{id}', [PublisherController::class, 'delete'])->name('publisher.delete');

Route::get('/user/index', [UserController::class,'index'])->name('user.index');

Route::get('/user/create', [UserController::class,'create'])->name('user.create');
Route::post('/user/store', [UserController::class,'store'])->name('user.store');

Route::post('/user/update/{id}', [UserController::class,'update'])->name('user.update');
Route::get('/user/edit/{id}', [UserController::class,'edit'])->name('user.edit');



Route::delete('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');




});

