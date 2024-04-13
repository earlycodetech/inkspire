@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5">
            <div class="card border-0 shadow bg-white">
                <div class="card-body">
                    
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success fw-bold text-center">
                            {{ $message }}
                        </div>
                    @endif

                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <h4> Editing: {{ $category->title }}</h4>

                        <a href="{{ route('categories.index') }}" class="btn btn-dark btn-sm">
                            All Categories
                        </a>
                    </div>

                    <form action="{{ route('categories.update', ['category' => $category->id]) }}" method="post">
                        @csrf @method('PATCH')

                        <label for="title" class="form-label small">
                            Category Title
                        </label>

                        <input type="text" name="title" id="title" value="{{ $category->title }}" class="form-control bg-white" required>
                        @error('title')
                            <p class="small text-danger fw-bold"> {{ $message }} </p>
                        @enderror

                        <div class="my-5">
                            <button class="btn btn-dark">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
