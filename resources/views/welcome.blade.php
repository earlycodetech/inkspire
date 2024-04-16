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
            <h3 class="fst-italic">Trending...</h3>

            <div class="row">
                @for ($i = 0; $i < 3; $i++)
                    <div class="col-md-6 col-lg-4 mb-3">
                        <a href="#" class="nav-link">
                            <div class="card bg-white border-0 shadow-sm">
                                <img src="{{ asset('books.jpg') }}" alt="Cover" class="card-img-top rounded">
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
    </section>

    <section>
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
    </section>
@endsection
