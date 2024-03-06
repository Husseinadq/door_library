<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
   {
    $books = Book::all();
//    return  dd($books);

    return view('backend.book.index',compact('books'));

   }
   public function create()
   {
    // dd("hgfds");
    return view('backend.book.create');
   }
   public  function store ( Request   $request)
   {

    $request->validate([
        'title'=> 'required',
        'author'=> 'required',
        'language'=> 'required',
    ]);

    $temp=  new Book();
    $temp->title=$request->title;
    $temp->author=$request->author;
    $temp->user_id= 1;
    $temp->category_id= 1;
    $temp->publisher_id= 1;
    $temp->publication_date=  date('Y-m-d H:i:s');
    $temp->number_of_pages= 1;
    $temp->language=$request->language;
    $isSaved = $temp->save();

    return redirect()->route('book.index');
}
public function edit( $id)
{
  $temp= Book::findOrFail($id);
  return view('backend.book.edit',compact('temp'));
//   $temp->title=$request->title;
//   $temp->author=$request->author;
//   return redirect()->route('create');
}
public  function update (Request   $request ,int $id)
{
    $request->validate([
        'title'=> 'required',
        'author'=> 'required',
        'language'=> 'required',
    ]);

    // Book::findOrFail($id)->update([


    // ]);
    $book=Book::find($id);
    $book->title= $request->title;
    $book-> author= $request->author;
    $book->language= $request->language;


    $book->save();

       return redirect( )->route('book.index')->with('status','Categort update');
}
    public function destroy( int $id)
{
  $category=Book::findOrFail($id);
  $category->delete();
  return redirect( )->route('book.index')->with('status','delete');
}
}
