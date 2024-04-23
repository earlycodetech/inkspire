@extends('layouts.app')
@section('content')

    <head>

        <!-- Custom fonts for this template-->
        <link href="resources/css/all.min.css" rel="stylesheet" type="text/css">

        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="resources/css/sb-admin-2.min.css" rel="stylesheet">

    </head>

    <section class="bg-primary">

        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class=" col-md-12 ">

                    <div class="card o-hidden border-0 shadow-lg my-5 ">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block ">
                                    <img src="{{ asset('dog.jpg') }}" class="img-fluid h-100 rounded-start" style="object-fit: cover;" alt="">
                                </div>
                                    
                                <div class="col-lg-6 ">
                                    
                                    <div class="p-5 ">
                                        <div class="text-center bg-primary border border-primary rounded ">
                                            <h1 class="h4 text-white p-2 fw-bolder fst-italic">Get In Touch With Us</h1>
                                        </div>
                                        <div class="row m-5">

                                            <div class="col md-2 mb-2">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label fw-bolder">
                                                        Full Name
                                                    </label>
                                                    <input type="text" name="name" class="form-control border border-primary"
                                                        id="exampleFormControlInput1" placeholder="John">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label fw-bolder">
                                                        Email
                                                    </label>
                                                    <input type="email" name="email" class="form-control border border-primary"
                                                        id="exampleFormControlInput1" placeholder="example@example.com">
                                                </div>
                                                
                                                <div class="mb-3 my-3">
                                                    <label for="exampleFormControlTextarea1"
                                                        class="form-label fw-bolder">Message</label>
                                                    <textarea class="form-control border border-primary" id="exampleFormControlTextarea1" rows="5" name="message"></textarea>
                                                </div>

                                                <button class="btn btn-outline-primary rounded-pill px-5">
                                                    Submit <i class="fa-solid fa-pencil"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="resources/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="resources/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="resources/js/sb-admin-2.min.js"></script>

    </section>
@endsection
