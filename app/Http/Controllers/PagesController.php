<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage ()
    {
        $product = "iphone";

   
        return view('welcome', compact('product'));
    }
}
