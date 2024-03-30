<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    
    public function register()
    {
        return view('backend.login.register'); 
    }


    

    public function login()
    {
        return view('backend.login.login');
    }

    // public function loginPost(Request  $request)
    // {
    //     $credetials=[
    //         'email'=> $request->email,
    //         'password'=> $request->password,
    //     ];

    //     if(Auth::attempt($credetials))
    //     {
    //         return redirect('/dashboard/index')->with('success' , 'Login berhasil');
    //     }
    //     return back()->with('error','Error Email or Password');


    // }





    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');

    }



    public function loginPost(Request $request)
    {

       $input = $request->all();

       $this->validate($request,[

        'email'=>'required|email',
        'password'=>'required'

       ]);

       if(auth()->attempt(array('email'=>$input['email'],'password'=>$input['password']))){
        if (auth()->user()-> role == 1){

            return redirect()->route('dashboard.index');

        }else
        {
          return redirect()->route('publisher.home');   
        }

       }else{

         return redirect('')->route('login')->with('error','Input prper email  or pasword');
       };
    }
}
