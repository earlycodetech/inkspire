@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5">
            <h3>
                {{ $category->title }}
            </h3>
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
                                        <i class="fa-solid fa-user"></i> {{ $book->title }}
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

                                    @auth

                                        <div class="d-flex align-items-center gap-2 my-3">
                                            <a href="{{ asset($book->file) }}" class="btn btn-primary btn-sm w-100"
                                                target="_blank" rel="noopener noreferrer" download="{{ $book->title }}">
                                                <i class="fa-solid fa-download"></i>
                                                <i class="fa-solid fa-file-pdf"></i>
                                            </a>
                                        </div>
                                    @else
                                        <div class="d-flex align-items-center gap-2 my-3">
                                            <a href="{{ route('login') }}" class="btn btn-primary btn-sm w-100">
                                                <i class="fa-solid fa-download"></i>
                                                <i class="fa-solid fa-file-pdf"></i>
                                            </a>
                                        </div>

                                    @endauth
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

        </div>
    </section>
@endsection
