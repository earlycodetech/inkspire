<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Category;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = Books::latest()->paginate(8);
        return  view('books.index', compact('books'));
    }

    public function create()
    {
        $categories = Category::all()->sortBy('title'); 
        return  view('books.create', compact('categories'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => "required|string|max:255",
            'author' => "required|string|max:100",
            'category' => "required|numeric|exists:categories,id",
            'cover_image' => "required|image|mimes:jpg,jpeg,png|max:1028",
            'file' => "required|file|mimes:pdf|max:5028",
        ]);


        // Uploading the cover image
        $imageFile = $request->file('cover_image');
        $imageExt = $imageFile->extension();
        $imageName = "book_cover_" . time() . '_' . rand(1000,9999  ) . '_' . mt_rand() . '.' . $imageExt;
        $imageFile->move('uploads/covers', $imageName);

        // Uploading the PDF FILE
        $pdfFile = $request->file('file');
        $pdfExt = $pdfFile->extension();
        $pdfName = "book_upload_" . time() . '_' . rand(1000,9999  ) . '_' . mt_rand() . '.' . $pdfExt;
        $pdfFile->move('uploads/books', $pdfName);
     
        Books::create([
            'title' => $data['title'],
            'author' => $data['author'],
            'category_id' => $data['category'],
            'cover_image' => "uploads/covers/" . $imageName,
            'file' => "uploads/books/" .$pdfName
        ]);

        return back()->with('success', "Book uploaded successfully");
    }
}
