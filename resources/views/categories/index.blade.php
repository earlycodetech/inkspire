@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5">
            <div class="card border-0 shadow bg-white">
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success fw-bold text-center">
                            {{ $message }}
                        </div>
                    @endif
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
                                @forelse ($categories as $category)
                                    <tr>
                                        <td> {{ $category->title }} </td>
                                        <td>
                                            {{ $category->created_at->format('M. jS, Y') }}
                                            &nbsp;
                                            &nbsp;
                                            {{ $category->created_at->format('h:i A') }}
                                        </td>
                                        <td> {{ $category->updated_at->diffForHumans() }} </td>
                                        <td>
                                            <div class="d-flex align-items-start gap-2 flex-wrap">
                                                <a href="{{ route('categories.edit', ['category' => $category->id]) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa-solid fa-edit"></i>
                                                </a>

                                                <form
                                                    onsubmit="return confirm('Are you sure you want to DELETE this category?')"
                                                    action="{{ route('categories.destroy', ['category' => $category->id]) }}"
                                                    method="post">
                                                    @csrf @method('DELETE')
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fa-solid fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-danger bg-white">
                                            No Categories Added Yet
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
