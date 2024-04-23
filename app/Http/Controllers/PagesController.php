<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage ()
    {
        $product = "iphone";
        $books = Books::latest()->take(12)->get();
   
        return view('welcome', compact('books'));
    }

    public function categories()
    {
        $categories = Category::oldest('title')->paginate(10);
        return view('guest.categories', compact('categories'));
    }
    public function single_category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $books = $category->books()->latest()->paginate(9);
        return view('guest.single-category', compact('category', 'books'));
    }

    public function search(Request $request)
    {
   
        /* ` = ->input('q');` is retrieving the value of the input field named 'q' from
        the request object. This is typically used to capture user input from a form submission
        where the user entered a search query. The value entered by the user in the 'q' input field
        will be stored in the variable `` for further processing, such as searching for books
        with titles that match the search query. */
        $search = $request->input('q');

        /* The line ` = Books::where('title', 'like', "%{}%")->latest()->paginate(9);` is
        performing a search query on the `Books` model based on the title attribute. Here's a
        breakdown of what each part of the query is doing: */
        $books = Books::where('title', 'like', "%{$search}%")->latest()->paginate(9);

       /* The line `return view('guest.search', compact('books', 'search'));` is responsible for
       rendering a view named 'guest.search' and passing data to that view. */
        return view('guest.search', compact('books', 'search'));
    }
}
