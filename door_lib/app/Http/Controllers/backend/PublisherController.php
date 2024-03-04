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
     $publisher->pub_websit=$request->input_websit;
     $publisher->decripton=$request->pub_dec;
     $publisher->icon='';
     $publisher->save();
     return redirect()->route('publisher.index');  // Replace 'publishers.index' with your actual route name

      



   } 

   public function edit(){
    return view('backend.publisher.edit');
   }  




}
