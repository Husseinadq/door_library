<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publisher;


class PublisherController extends Controller
{


    public function index()
    {

        $publishers=Publisher::all();
        $title= 'create';

        return view('backend.publisher.index',compact('publishers','title'));   
    }
    
   public function create(){
    return view('backend.publisher.create');
   } 




   public function store(Request $request){

     $publisher=new Publisher;
     $publisher->name=$request->pub_name;
     $publisher->pub_websit=$request->pub_websit;
     $publisher->decripton=$request->pub_dec;
     $publisher->icon='';
     $publisher->save();
     return redirect()->route('publisher.index');  // Replace 'publishers.index' with your actual route name

      



   } 

   public function edit($id)
      {
        $publisher= Publisher::find($id);   

       return view('backend.publisher.edit',compact('publisher'));
      }


      public function update(Request $request,$id)
      {
        $publisher= Publisher::find($id);

        $publisher->name=$request->pub_name;
        $publisher->pub_websit=$request->pub_websit;
        $publisher->decripton=$request->pub_dec;
        $publisher->icon='';
        $publisher->save();

        return redirect()->route('publisher.index'); 


      }

      public function delete(Request $request,$id)
      {

    
        $publisher= Publisher::find($id);
        $publisher->delete();


      
        return redirect()->route('publisher.index')->with('success', 'Publisher deleted successfully!');

      }






      public function index_dash()
      {
          return view('backend.dashboard.index');
      }



}
