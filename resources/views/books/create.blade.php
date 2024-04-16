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
                    
                </div>
            </div>
        </div>
    </section>
@endsection
