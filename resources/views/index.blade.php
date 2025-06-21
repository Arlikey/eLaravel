@extends('templates.main-boilerplate')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/category/category.css') }}">
@endsection

@section('content')
    <div class="category-grid">
        @foreach ($categories as $category)
            <a class="category-card" href="{{ route('movies', $category->id) }}">
                <img src="{{ asset('storage/' . $category->image) }}" class="card-img-top" />
                <div class="overlay"></div>
                <h2 class="category-title fs-1 fw-bold">{{ $category->name }}</h2>
            </a>
        @endforeach
    </div>
@endsection
