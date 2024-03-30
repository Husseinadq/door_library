<?php

use App\Http\Controllers\backend\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoorController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\AuthorController;
use App\Http\Controllers\backend\PublisherController;
use App\Http\Controllers\backend\BookController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\backend\UserController;

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

Route::get('book/index',[BookController::class,'index'])->name('book.index')->middleware('role');
Route::get('book/craete',[BookController::class,'create'])->name('book.create');
Route::post('book/store',[BookController::class,'store'])->name('book.store');
Route::get('book/edit/{id}',[BookController::class,'edit'])->name('book.edit');
Route::post('book/update/{id}',[BookController::class,'update'])->name('book.update');
Route::get('book/delete/{id}',[BookController::class,'destroy'])->name('book.destroy');

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

     

      Route::get('/login', [AuthController::class, 'login'])->name('login');
      Route::get('login-p',[AuthController::class,'login'])->name('login-page');
      Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
   }
);


Route::group(['middleware' => 'auth'], function () {
   Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('role');


   Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('role');
   Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');


   

Route::get('/publisher/index', [PublisherController::class, 'index'])->name('publisher.index')->middleware('role');
Route::get('/publisher/create', [PublisherController::class, 'create'])->name('publisher.create')->middleware('role');

Route::get('/publisher/edit/{id}', [PublisherController::class, 'edit'])->name('publisher.edit')->middleware('role');

Route::post('/publisher/store', [PublisherController::class, 'store'])->name('publisher.store')->middleware('role');
Route::post('/publisher/update/{id}', [PublisherController::class, 'update'])->name('publisher.update')->middleware('role');

Route::get('/publisher/delete/{id}', [PublisherController::class, 'delete'])->name('publisher.delete')->middleware('role');

Route::get('/user/index', [UserController::class,'index'])->name('user.index')->middleware('role');

Route::get('/user/create', [UserController::class,'create'])->name('user.create')->middleware('role');


Route::post('/user/update/{id}', [UserController::class,'update'])->name('user.update')->middleware('role');
Route::post('/user-updatepassword/{id}', [UserController::class,'updatePassword'])->name('user.updatePassword')->middleware('role');
Route::get('/user/edit/{id}', [UserController::class,'edit'])->name('user.edit')->middleware('role');



Route::delete('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete')->middleware('role');



Route::get('publisher/users', [UserController::class, 'publisherUsers'])->name('publisher.users')->middleware('role');

Route::get('user/{id}',[UserController::class,'updateState'])->name('change-pub-status');



});
// Author
Route::get('author', [AuthorController::class, 'index'])->name('author.index');
Route::get('author/create', [AuthorController::class, 'create']) ->name('author.create');
Route::post('author/create', [AuthorController::class, 'store']);
Route::get('author/{id}/edit', [AuthorController::class, 'edit']);
Route::put('author/{id}/edit', [AuthorController::class,'update']);
Route::get('author/{id}/delete', [AuthorController::class,'destory'] )->name('author.delete');

//we need to return it to his place


Route::get('singup-publisher', [UserController::class,'signup'] )->name('publisher.singup');

Route::post('/user/store/publisher', [UserController::class,'store'])->name('user.store');
Route::post('/user/store', [UserController::class,'storeAdmin'])->name('user.storeAdmin');
Route::get('publisher/home', [DashboardController::class,'publisherHome'])->name('publisher.home');



