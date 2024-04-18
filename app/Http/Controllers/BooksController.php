<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        return  view('books.index');
    }

    public function create()
    {
        $categories = Category::all()->sortBy('title'); 
        return  view('books.create', compact('categories'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => "required",
            'author' => "required",
            'category' => "required",
            'cover_image' => "required",
            'file' => "required",
        ]);
        dd($request->input(), $request->file());
    }
}
