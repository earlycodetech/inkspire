@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5">
            <div class="card border-0 shadow-sm bg-white">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5>Add new book</h5>

                    <a href="{{ route('admin.books.index') }}" class="btn btn-primary">
                        All Books
                    </a>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.books.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" value="{{ old('title') }}" id="title" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="author" class="form-label">Author</label>
                                <input type="text" name="author" value="{{ old('author') }}" id="author" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select name="category" id="category" class="form-select">
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}" {{ old('category') == $item->id ? 'selected' : '' }}>
                                             {{ $item->title }} 
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="cover" class="form-label">Cover Image</label>
                                <input type="file" name="cover_image" accept=".png,.jpg,.jpeg" id="cover"
                                    class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="file" class="form-label">PDF FIle</label>
                                <input type="file" name="file" accept=".pdf" id="file" class="form-control">
                            </div>

                            <div class="col-12 text-center">
                                <button class="btn btn-dark">
                                    Upload Book
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
