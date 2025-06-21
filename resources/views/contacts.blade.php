@extends('templates.main-boilerplate')

@section('content')
    <h1 class="text-center my-4">Contact Us</h1>

    @include('templates.errors')

    <x-message.success />

    <form action={{route('sendFeedback')}} method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                        placeholder="Username" aria-label="Username" value="{{ old('username') }}">
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                    <input type="tel" id="phone" name="phone"
                        class="form-control phone @error('phone') is-invalid @enderror" placeholder="+38(XXX) XX XX XXX"
                        aria-label="Phone Number" value="{{ old('phone') }}">
                    @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                placeholder="example@mail.com" aria-label="Email" value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="input-group mb-4">
            <span class="input-group-text">Message</span>
            <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="4"
                aria-label="Message">{{ old('message') }}</textarea>
            @error('message')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-outline-primary d-flex align-items-center gap-2 px-4 py-2">
                <span>Send</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-send-fill" viewBox="0 0 16 16">
                    <path
                        d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z" />
                </svg>
            </button>
        </div>
    </form>
@endsection
