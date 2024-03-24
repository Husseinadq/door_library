<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public  function index()
    {
        $wishlists = \App\Models\Wishlist::all();
        return view('wishlist.index', compact('wishlists'));
    }

    public   function create()
    {
        return view('wishlist.create');
    }

    public function store(Request  $request)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'is_active' => 'sometimes'
        ]);

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'is_active' => $request->is_active == true ? 1:0,
        ]);

        return redirect()-> route('wishlist.index')->with('status', 'Wishlist Created');
    }

    public function edit(int $id)
    {
        $category= Wishlist::findOrFail($id);
        return view('wishlist.edit', compact('wishlist'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'is_active' => 'sometimes'
        ]);

        Category::findOrFail($id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'is_active' => $request->is_active == true ? 1:0,
        ]);

        return redirect()-> back()->with('status', 'Wishlist Update');
    }

    public function destory(int $id)
    {
        $wishlist = Wishlist::findOrFail($id);
        $wishlist->delete();
        return redirect()-> back()->with('status', 'Wishlist Deleted');
    }
}
