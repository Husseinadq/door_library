<?php

namespace App\Http\Controllers;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public  function index()
    {
        $authors = Author::all();
        return view('author.index', compact('authors'));
    }

    public   function create()
    {
        return view('author.create');
    }

    public function store(Request  $request)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'is_active' => 'sometimes'
        ]);

        Author::create([
            'name' => $request->name,
            'description' => $request->description,
            'is_active' => $request->is_active == true ? 1:0,
        ]);

        return redirect()-> route('author.index')->with('status', 'author Created');
    }

    public function edit(int $id)
    {
        $author= Author::findOrFail($id);
        return view('author.edit', compact('author'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'is_active' => 'sometimes'
        ]);

        Author::findOrFail($id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'is_active' => $request->is_active == true ? 1:0,
        ]);

        return redirect()-> back()->with('status', 'Author Update');
    }

    public function destory(int $id)
    {
        $author = Author::findOrFail($id);
        $author->delete();
        return redirect()-> back()->with('status', 'Author Deleted');
    }

}
