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
            </div>
        </div>
    </section>
@endsection
