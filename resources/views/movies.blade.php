@extends('templates.main-boilerplate')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/movie/movie.css') }}">
@endsection

@section('content')
    <div class="movie-grid">
        @foreach ($movies as $movie)
            <a class="movie-card" href="{{ route('movieDetails', [$category->id, $movie->id]) }}">
                <img src="{{ asset('storage/' . $movie->image) }}" alt="{{ $movie->title }}">
                <div class="movie-title">{{ $movie->title }}</div>
            </a>
        @endforeach
    </div>
@endsection
