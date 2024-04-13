<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData  = $request->validate([
            'title' => "required|string|max:50|unique:categories,title"
        ]);

        $slug = Str::slug($validatedData['title'], '-');

        Category::create([
            'title' => $validatedData['title'],
            'slug' => $slug
        ]);

        // return redirect('/categories/create');
        // return redirect()->route('categories.create');
        return back()->with('success', "Category Created");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $category = Category::find($id);
        // $category = Category::where('id', '=', $id)->first();
        // $category = Category::findOrFail(11);
        $category = Category::where('id', '=', $id)->firstOrFail();

        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
        $validatedData  = $request->validate([
            'title' => "required|string|max:50|unique:categories,title,id," . $id
        ]);

        $slug = Str::slug($validatedData['title'], '-');

        Category::where('id', $id)->update([
            'title' => $validatedData['title'],
            'slug' => $slug
        ]);

        return back()->with('success', "Category Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::where('id', $id)->delete();
        return back()->with('success', "Category Deleted");
    }
}
