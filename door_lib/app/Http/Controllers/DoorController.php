<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class DoorController extends Controller
{
    public function index()
    {
        $books = Book::all();
     return view('frontend.book.book',compact('books'));

    }
    public function indexz()
   {
    $books = Book::all();

    return view('backend.book.index',compact('books'));

   }
   public function create()
   {
    return view('backend.book.create');
   }

   public  function store ( Request   $request)
   {

    $request->validate([

// Full texts
// id
// title
// user_id
// is_baid
// category_id
// publisher_id
// publication_date
// number_of_pages
// price
// language
// description
// image
        'title'=> 'required',
        'description'=> 'required',
        'publication_date'=> 'required',
        // 'publication_date'=> 'required',
        // 'publication_date'=> 'required',
        // 'publication_date'=> 'required',




    ]);
    //     $request['is_active']=0 ;
    // $temp= category ::create($request->all());
    // $isSaved = $temp->save();
    // //  dd($isSaved);




return redirect()->route('indexs')->with('status','تم النشر');

}

}
