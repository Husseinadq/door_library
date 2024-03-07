<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index (){
        $books = Book::all();
        return view('backend.authors.index');
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'nullable|string',
            'published_date' => 'required|date',
            'isbn' => 'required|string|max:13',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $book = new Book;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->description = $request->description;
        $book->published_date = $request->published_date;
        $book->isbn = $request->isbn;

        $imageName = time() . '.' . $request->cover_image->extension();
        $request->cover_image->move(public_path('uploads'), $imageName);
        $book->cover_image = $imageName;

        $book->save();

        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'nullable|string',
            'published_date' => 'required|date',
            'isbn' => 'required|string|max:13',
            'cover_image' => 'sometimes|image|mimes:jpeg'
        ]);
        }
}
