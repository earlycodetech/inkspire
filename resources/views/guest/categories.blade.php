@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5">
            <h3>
                Our Categories
            </h3>
            <ul class="list-group list-group-flush">
                @forelse ($categories as $item)
                    
                <li class="list-group-item bg-white">
                    <a href="{{ route('guest.categories.single', ['slug' => $item->slug]) }}" class="nav-link">
                        {{ $item->title }}
                    </a>
                </li>
                @empty
                <li class="list-group-item bg-white">
                   Coming Soon
                </li>
                @endforelse
            </ul>
            
        </div>
    </section>
@endsection