@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5">
            <div class="card border-0 shadow bg-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <h4>All Categories</h4>
                        
                        <a href="{{ route('categories.create') }}" class="btn btn-dark btn-sm">
                            New Category
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="row"> Title </th>
                                    <th scope="row"> Date Created </th>
                                    <th scope="row"> Last Updated </th>
                                    <th scope="row"> ... </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection