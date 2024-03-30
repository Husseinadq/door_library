<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Publisher;
use App\Models\User;

class DashboardController extends Controller
{
    
  public function index()
  {


  $publishers = Publisher::count();

  $users = User::count();

  return view('backend.dashboard.index', compact('publishers','users'));
  }







  public function publisherHome()
  {
    
  $publishers = Publisher::count();

  $users = User::count();
    return view('backend.dashboard.publisher',compact('publishers','users'));
  }


  
}
