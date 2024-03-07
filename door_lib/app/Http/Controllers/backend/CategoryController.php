<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
     $categories = Category::all();
     return view('backend.category.index',compact('categories'));

    }
    public function create()
    {
     // dd("hgfds");
     return view('backend.category.create');
    }
    public  function store ( Request   $request)
    {

     $request->validate([
         'name'=> 'required',
         'description'=> 'required',
        //  'parent_id'=> 'required',
     ]);

     $temp=  new Category();
     $temp->name=$request->name;
     $temp->description=$request->description;
    //  $temp->parent_id=$request->parent_id;
     $isSaved = $temp->save();

     return redirect()->route('category.index');
 }
    public function edit( $id)
    {
    $temp= Book::findOrFail($id);
    return view('backend.category.edit',compact('temp'));

    }
 public  function update (Request   $request ,int $id)
 {
     $request->validate([
        'name'=> 'required',
        'description'=> 'required',
        // 'parent_id'=> 'required',
     ]);


     $book=Category::find($id);
     $temp->name=$request->name;
     $temp->description=$request->description;
    //  $temp->parent_id=$request->parent_id;


     $book->save();

        return redirect( )->route('category.index')->with('status','Categort update');
 }
     public function destroy( int $id)
 {
   $category=Category::findOrFail($id);
   $category->delete();
   return redirect( )->route('category.index')->with('status','delete');
 }
 }
