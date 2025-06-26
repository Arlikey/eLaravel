@extends('templates.admin-boilerplate')

@section('content')
    <h1>Edit Review</h1>

    @include('templates.errors')

    <form action="{{ route('reviews.update', $review->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ $review->username }}">
        </div>
        <div class="mb-3">
            <label for="comment" class="form-label">Comment</label>
            <input type="text" class="form-control" id="comment" name="comment" value="{{ $review->comment }}">
        </div>
        <div class="mb-3">
            <div class="input-group form-check ps-0 emoji-radio">
                <input type="radio" class="btn-check" name="satisfaction" id="unsatisfied" value="1"
                    autocomplete="off" @if ($review->satisfaction === 1) checked @endif>
                <label class="btn fs-2 text-danger" for="unsatisfied"><i class="bi bi-emoji-frown-fill"></i></label>
                <input type="radio" class="btn-check" name="satisfaction" id="neutral" value="2" autocomplete="off"
                    @if ($review->satisfaction === 2) checked @endif>
                <label class="btn fs-2 text-warning" for="neutral"><i class="bi bi-emoji-neutral-fill"></i></label>
                <input type="radio" class="btn-check" name="satisfaction" id="satisfied" value="3" autocomplete="off"
                    @if ($review->satisfaction === 3) checked @endif>
                <label class="btn fs-2 text-success" for="satisfied"><i class="bi bi-emoji-smile-fill"></i></label>

            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
