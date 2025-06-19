@extends('templates.main-boilerplate')

@section('content')
    <h1 class="text-center my-4">Student Registration</h1>

    @include('templates.errors')

    <x-success-message />

    <form action="{{ route('registerStudent') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <label class="form-label">Full name</label>
            <div class="col">
                <div class="input-group"><input type="text" class="form-control" name="last-name" placeholder="Last name"
                        value="{{ old('last-name') }}">
                </div>
            </div>
            <div class="col">
                <div class="input-group"><input type="text" class="form-control" name="first-name"
                        placeholder="First name" value="{{ old('first-name') }}"></div>
            </div>
            <div class="col">
                <div class="input-group"><input type="text" class="form-control" name="fathers-name"
                        placeholder="Father's name" value="{{ old('fathers-name') }}"></div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Date of Birth</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                    <input type="date" name="date-of-birth" class="form-control" value="{{ old('date-of-birth') }}">
                </div>
            </div>
            <div class="col">
                <label for="" class="form-label">Phone Number</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-phone"></i></span>
                    <input type="tel" class="form-control" name="phone-number" placeholder="+38(XXX) XX XX XXX"
                        value="{{ old('phone-number') }}">
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input type="email" name="email" class="form-control" placeholder="example@mail.com"
                        value="{{ old('email') }}  ">
                </div>
            </div>
            <div class="col">
                <label for="" class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-key"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="*********">
                </div>
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label">Gender</legend>
            @foreach ($genders as $gender)
                <div class="col-1 form-check">
                    <input type="radio" class="btn-check" name="student-gender" value="{{ $gender }}"
                        id="{{ $gender }}" autocomplete="off" {{ $loop->first ? 'checked' : '' }}>
                    <label for="{{ $gender }}" class="btn btn-outline-primary">{{ $gender }}</label>
                </div>
            @endforeach
        </fieldset>
        <fieldset class="row mb-3">
            <legend class="col-form-label">Department</legend>
            @foreach ($departments as $department)
                <div class="col-1 form-check">
                    <input type="checkbox" class="btn-check" name="student-department[]" id="{{ $department }}"
                        value="{{ $department }}" autocomplete="off" />
                    <label for="{{ $department }}" class="btn btn-outline-success">{{ $department }}</label>
                </div>
            @endforeach
        </fieldset>
        <div class="row mb-3">
            <div class="col">
                <label for="student-course" class="form-label">Course</label>
                <select class="form-select" name="student-course[]" id="student-course" size="4" multiple>
                    @foreach ($courses as $course)
                        <option value="{{ $course }}">{{ $course }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Student Photo</label>
                <input type="file" name="student-photo" class="form-control" id="inputGroupFile02">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">City</label>
                <input type="text" name="city" class="form-control" placeholder="New York" value="{{ old('city') }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Address</label>
                <textarea type="text" class="form-control" rows="3" name="address"
                    placeholder="123 Main Street, Apt 4B, New York, NY 10001">{{old('address')}}</textarea>
            </div>
        </div>
        <div class="d-flex justify-content-center my-4">
            <button type="submit" class="btn btn-primary d-flex align-items-center gap-2 px-4 py-2">
                <i class="bi bi-person"></i>
                <span>Register</span>
            </button>
        </div>
    </form>
@endsection
