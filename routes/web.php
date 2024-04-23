<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [PagesController::class, "homepage"])->name('homepage');

Route::get('our-categories', [PagesController::class, "categories"])->name('guest.categories.all');
Route::get('categories/{slug}', [PagesController::class, "single_category"])->name('guest.categories.single');
Route::get('search', [PagesController::class, 'search'])->name('guest.search');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('categories', CategoriesController::class)->middleware(['auth','admin.checker']);


Route::get('books', [BooksController::class, 'index'])->middleware(['auth', 'admin.checker'])->name('admin.books.index');
Route::get('books/create', [BooksController::class, 'create'])->middleware(['auth', 'admin.checker'])->name('admin.books.create');
Route::post('books/create', [BooksController::class, 'store'])->middleware(['auth', 'admin.checker'])->name('admin.books.store');
Route::resource('contact', ContactController::class)->except([
    'create',
    'update',
    'edit',
    'destroy',
    'show'
]);