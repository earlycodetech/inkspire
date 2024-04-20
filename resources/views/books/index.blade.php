@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5">
            <div class="card border-0 shadow-sm bg-white">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5>All Books</h5>
                    <a href="{{ route('admin.books.create') }}" class="btn btn-primary">
                        New Book
                    </a>
                </div>

                <div class="card-body">
                    <div class="row">
                        @forelse ($books as $book)
                            <div class="col-md-6 col-lg-3 mb-3">
                                <a href="#" class="nav-link">
                                    <div class="card bg-white border-0 shadow-sm h-100">
                                        <img src="{{ asset($book->cover_image) }}" alt="Cover" class="card-img-top rounded">
                                        <div class="card-body">
                                            <p class="fw-bold h5">
                                                {{ fake()->sentence }}
                                            </p>
                                            <p class="fw-semibold">
                                                <i class="fa-solid fa-user"></i> {{ $book->title}}
                                            </p>
                                            <p class="small">
                                                <i class="fa-solid fa-user"></i> {{ $book->author }}
                                            </p>

                                            <div class="d-flex align-items-center text-warning gap-4">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star-half-stroke"></i>
                                            </div>

                                            <div class="d-flex align-items-center gap-2 my-3">
                                                <a 
                                                href="{{ asset($book->file) }}" 
                                                class="btn btn-primary btn-sm w-100" 
                                                target="_blank" 
                                                rel="noopener noreferrer">
                                                    <i class="fa-solid fa-book-open-reader"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        @empty
                            <div class="p-5 text-center fs-1">
                                No Records Found
                            </div>
                        @endforelse
                    </div>

                    <div class="px-5">
                        {!! $books->links('pagination::bootstrap-5') !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
