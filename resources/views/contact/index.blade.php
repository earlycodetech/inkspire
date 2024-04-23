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

                <div class="col-xl-10 col-lg-12 col-md-9 ">

                    <div class="card o-hidden border-0 shadow-lg my-5 ">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block ">
                                    <img src="{{ asset('dog.jpg') }}" class="img-fluid h-100" alt="">
                                </div>
                                    
                                <div class="col-lg-6 ">
                                    
                                    <div class="p-5 ">
                                        <div class="text-center bg-primary border border-primary rounded ">
                                            <h1 class="h4 text-white p-2 fw-bolder fst-italic">Get In Touch With Us</h1>
                                        </div>
                                        <div class="row m-5">

                                            <div class="col md-2 mb-2">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label fw-bolder">First
                                                        Name</label>
                                                    <input type="text" class="form-control border border-primary"
                                                        id="exampleFormControlInput1" placeholder="John">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label fw-bolder">
                                                        <p>Surname (Optional)</p>
                                                    </label>
                                                    <input type="text" class="form-control border border-primary"
                                                        id="exampleFormControlInput1" placeholder="Doe">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label fw-bolder">Email
                                                        Address</label>
                                                    <input type="email" class="form-control border border-primary"
                                                        id="exampleFormControlInput1" placeholder="example@gmail.com">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label fw-bolder">Phone Number
                                                        (Optional)</label>
                                                    <input type="number" class="form-control border border-primary"
                                                        id="exampleFormControlInput1" placeholder="+234">
                                                </div>
                                                <select class="form-select border border-primary"
                                                    aria-label="Default select example">
                                                    <option selected>Reason for contact</option>
                                                    <option value="1">Partnership</option>
                                                    <option value="1">Careers</option>
                                                    <option value="2">Technical Issues</option>
                                                    <option value="3">Other</option>
                                                </select>
                                                <div class="mb-3 my-3">
                                                    <label for="exampleFormControlTextarea1"
                                                        class="form-label fw-bolder">Message</label>
                                                    <textarea class="form-control border border-primary" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>

                                                <a href="#" class="btn btn-outline-primary rounded-pill px-5">
                                                    Submit <i class="fa-solid fa-pencil"></i>
                                                </a>
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
