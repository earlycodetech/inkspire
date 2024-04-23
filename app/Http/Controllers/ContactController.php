<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $data  = $request->validate([
            'name' => "required|string|max:255",
            'email' => "required|email",
            'message' => "required|string"
        ]);

        try {
            $receiver = "emmanuelodobo10@gmail.com";
            Mail::to($receiver)->send(new ContactMail($data));
            return back()->with('success', "Mail Sent ");
        } catch (\Throwable $th) {
            return back()->with('error', "Something went wrong");
        }
     
    }
}
