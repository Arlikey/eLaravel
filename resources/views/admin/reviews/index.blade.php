@extends('templates.admin-boilerplate')

@section('content')
    <h1>Reviews</h1>

    <a href="{{ route('reviews.create') }}" class="btn btn-primary">Create review</a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Comment</th>
                <th>Satisfaction</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        {{ $review->username }}
                    </td>
                    <td>{{ $review->comment }}</td>
                    <td>{{ $review->satisfaction }} - <x-review.review-emoji :satisfaction="$review->satisfaction" /></td>
                    <td>
                        <a href="{{ route('reviews.edit', $review) }}" class="btn btn-primary"><i class="bi bi-pen"></i></a>

                        <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
