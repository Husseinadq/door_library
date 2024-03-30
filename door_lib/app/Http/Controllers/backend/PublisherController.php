<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfferRequest;
use Illuminate\Http\Request;
use App\Models\Publisher;
use Illuminate\Support\Facades\Validator;
use App\Traits\OfferTrait;


class PublisherController extends Controller
{
  use OfferTrait;


  public function index()
  {

    $publishers = Publisher::all();
    $title = 'create';

    return view('backend.publisher.index', compact('publishers', 'title'));
  }


  

  public function create()
  {
    return view('backend.publisher.create');
  }




  public function store(OfferRequest $request)
  {



    // $rules = $this->getrules();
    // $messages = $this->getmessages();
    // $validator = Validator::make(
    //   $request->all(),
    //   $rules,
    //   $messages
    // );



    // if ($validator->fails()) {
    //   //return $validator->errors()->first();
    //  return redirect()->back()->withErrors($validator)->withInputs($request->all());
      
    // }


    $publisher = new Publisher;
    $publisher->photo = $this->saveImage($request->photo, 'adminassets/images/offers');
    $publisher->name = $request->pub_name;
    $publisher->pub_websit = $request->pub_websit;
    $publisher->password =$request->pass_login;
    $publisher->decripton = $request->pub_dec;
    $publisher->save();
    return redirect()->back()->with(['success' => 'تم إضافة العرض بنجاح']);  // Replace 'publishers.index' with your actual route name







  }

  public function edit($id)
  {
    $publisher = Publisher::find($id);

    return view('backend.publisher.edit', compact('publisher'));
  }


  public function update(Request $request, $id)
  {
    $publisher = Publisher::find($id);

    $file_name = $this->saveImage($request->photo, 'adminassets/images/offers');

    $publisher->photo = $file_name;
    $publisher->name = $request->pub_name;
    $publisher->pub_websit = $request->pub_websit;
    $publisher->decripton = $request->pub_dec;
    $publisher->save();

    return redirect()->back()->with(['success' => 'تم التعديل بنجاح']);
  }

  public function delete(Request $request, $id)
  {


    $publisher = Publisher::find($id);
    $publisher->delete();





    return redirect()->route('publisher.index')->with('success', 'Publisher deleted successfully!');
  }


  








  // protected function getrules()
  // {
  //   return $rules = [

  //     'pub_name'=>'required|max:100|unique:publisher,name',
  //     'pub_websit'=>'required|unique:publisher,pub_websit',
  //     'pub_dec'=>'required',
  //     'photo'=>'required',

  //   ];
  // }




  // protected function getmessages()
  // {
  //   return $messages =
  //     [

  //       'pub_name.required'=>'يجب ادخال حقل الاسم',
  //       'pub_name'=>'لقد تجاوزت الحدد المسموح به لعدد الاحرف',
  //       'pub_name'=>'الاسم موجود مسبقا، استخدم اسم آخر',
        
  //       'pub_websit.required'=>'يجب ادخال حقل الايميل',
  //       'pub_websit.unique'=>'الايميل موجود سابقاً استخدم اسم ايميل آخر',
  
  //       'pub_dec.required'=>'يجب ادخال  حقل الوصف',
  //       'photo.required'=>'يجب ادخال صورة',
  
  //     ];
  // }
}
