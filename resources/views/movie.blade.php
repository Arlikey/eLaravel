@extends ('templates.main-boilerplate')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/movie/movie.css') }}">
@endsection

@section('content')
    <div class="row mb-2">
        <h1>{{ $movie->title }}</h1>
    </div>
    <div class="row mb-5">
        <div class="col-3">
            <img src="{{ asset('storage/' . $movie->image) }}" alt="{{ $movie->title }}" class="img-fluid">
        </div>
        <div class="col">
            <h2 class="fs-3">Details</h2>
            <p class="fs-5">
                <strong>Category:</strong> <a href="{{ route('movies', $category->id) }}"><em>{{ $category->name }}</em></a>
            </p>
            <h2 class="fs-3 mt-4">Description</h2>
            <p>{{ $movie->description }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <h2 class="mb-2">Trailer</h2>
            @if ($movie->url)
                <iframe src="{{ $movie->url }}" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            @else
                <p>No trailer available.</p>
            @endif
        </div>
    </div>
@endsection
