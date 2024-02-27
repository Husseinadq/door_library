<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoorController extends Controller
{
    public function index()
    {
     return view('frontend.book.book');
     $book = Book::where('title', 'The Book Thief')->first();
    }
}
