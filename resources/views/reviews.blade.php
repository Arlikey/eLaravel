@extends('templates.main-boilerplate')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/review/review.css') }}">
@endsection

@section('content')
    <div class="row my-4">
        <div class="col-6">
            <h2 class="mb-3">Your Feedback</h2>

            <x-success-message />

            <form action={{ route('postReview') }} method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Username</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                            <input type="text" name="username"
                                class="form-control @error('username') is-invalid @enderror" placeholder="Bobby"
                                aria-label="Username" value="{{ old('username') }}">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="" class="form-label">How satisfied are you with our website?</label>
                        <div class="input-group form-check ps-0 emoji-radio">
                            <input type="radio" class="btn-check" name="satisfaction" id="unsatisfied" value="1"
                                autocomplete="off">
                            <label class="btn fs-2 text-danger" for="unsatisfied"><i
                                    class="bi bi-emoji-frown-fill"></i></label>
                            <input type="radio" class="btn-check" name="satisfaction" id="neutral" value="2"
                                autocomplete="off">
                            <label class="btn fs-2 text-warning" for="neutral"><i
                                    class="bi bi-emoji-neutral-fill"></i></label>
                            <input type="radio" class="btn-check" name="satisfaction" id="satisfied" value="3"
                                autocomplete="off" checked>
                            <label class="btn fs-2 text-success" for="satisfied"><i
                                    class="bi bi-emoji-smile-fill"></i></label>

                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="mb-4">
                            <label class="form-label">Message</label>
                            <textarea class="form-control @error('comment') is-invalid @enderror" name="comment" rows="4"
                                aria-label="Comment">{{ old('comment') }}</textarea>
                            @error('comment')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-primary d-flex align-items-center gap-2 px-4 py-2">
                        <span>Send</span>
                        <i class="bi bi-chat-left-dots"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="col-6">
            <h2 class="mb-3">Recent Reviews</h2>
            <div class="reviews-list">
                @if ($reviews->isEmpty())
                    <div class="alert alert-info" role="alert">
                        No reviews yet. Be the first to leave your feedback!
                    </div>
                @else
                    @foreach ($reviews as $review)
                        <div class="card text-bg-dark mb-3">
                            <div class="card-header gap-2 d-flex align-items-center fs-5">
                                {{ $review->username }}
                                <x-review.review-emoji :satisfaction="$review->satisfaction" />
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $review->comment }}</p>
                            </div>
                            <div class="card-footer text-muted fst-italic">
                                {{ $review->created_at->format('H:i, d M Y') }}
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
