@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <div class="hero row">
                <div class="col-md-6 mb-2">
                    <img src="{{ asset('logo.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-md-6 mb-2 py-5">
                    <p class="fs-1">
                        Welcome to inkSpire <br>
                        A marvelous world of imagination
                    </p>

                    <a href="" class="btn btn-outline-dark rounded-pill px-5">
                        Write <i class="fa-solid fa-pen-nib"></i>
                    </a>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container my-5">
            <div class="d-flex justify-content-between align-items-center gap-3 flex-wrap">
                <h3 class="fst-italic">Browse our Books...</h3>

                <a href="{{ route('guest.categories.all') }}" class="btn btn-primary btn-sm">
                    View all Categories
                </a>
            </div>

            <div class="row">
                @forelse ($books as $book)
                    <div class="col-md-6 col-lg-4 mb-3">
                        <a href="#" class="nav-link">
                            <div class="card bg-white border-0 shadow-sm h-100">
                                <img src="{{ asset($book->cover_image) }}" alt="Cover" class="card-img-top rounded">
                                <div class="card-body">
                                    <p class="fw-bold h5">
                                        {{ $book->title }}
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

    {{-- <section>
        <div class="container my-5">
            <div class="d-flex align-items-center justify-content-between">
                <h3 class="fst-italic">Latest Updates...</h3>

                <a href="" class="nav-link">View All</a>
            </div>

            <div class="row">
                @for ($i = 0; $i < 8; $i++)
                    <div class="col-md-6 col-lg-3 mb-3">
                        <a href="#" class="nav-link">
                            <div class="card bg-white border-0 shadow-sm">
                                <img src="{{ asset('main-bg.jpg') }}" alt="Cover" class="card-img-top rounded">
                                <div class="card-body">
                                    <p class="fw-bold h5">
                                        {{ fake()->sentence }}
                                    </p>
                                    <p class="fw-semibold">
                                        <i class="fa-solid fa-user"></i> {{ fake()->name }}
                                    </p>

                                    <div class="d-flex align-items-center text-warning gap-4">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </section> --}}
@endsection
