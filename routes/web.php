<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [PagesController::class, "homepage"])->name('homepage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('categories', CategoriesController::class);


Route::get('books', [BooksController::class, 'index'])->name('admin.books.index');
Route::get('books/create', [BooksController::class, 'create'])->name('admin.books.create');
Route::post('books/create', [BooksController::class, 'store'])->name('admin.books.store');