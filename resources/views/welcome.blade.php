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
                    Write
                </a>

            </div>
        </div>
    </div>
  </section>
@endsection