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
}
