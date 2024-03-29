<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use PhpParser\Node\Expr\FuncCall;

class UserController extends Controller
{
   
    public function index()
    {
        

    $users = User::all();
    
      $title='create';
    
         return view('backend.login.index', compact('users', 'title'));
    }

    public function create()
    {
        return view('backend.login.create');

    }

   
  public function store(UserRequest $request)
  {




    $user = new User;
    
    $user->name = $request->user_name;
    $user->email = $request->user_email;
    $user->password = $request->user_pass;
    $user->save();
    return redirect()->back()->with(['success' => 'تم إضافة المستخدم بنجاح']);  // Replace 'publishers.index' with your actual route name







  }














  public function edit($id)
  {
    $user = User::find($id);

    return view('backend.login.edit', compact('user'));


  }


  public function update(Request $request, $id)
  {
    $user = User::find($id);

    

    
    $user->name = $request->user_name;
    $user->email = $request->user_email;
    $user->password = $request->user_pass;
    $user->save();

    return redirect()->back()->with(['success' => 'تم التعديل بنجاح']);
  }




  public function delete(Request $request, $id)
  {


    $users = User::find($id);
    $users->delete();





    return redirect()->route('user.index')->with('success', 'user deleted successfully!');
  }
}
