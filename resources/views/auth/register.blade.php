@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control mb-3 pb-3 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control mb-3 pb-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">Gender</label>

                            <div class="col-md-6">
                                <input id="gender" type="text" class="form-control mb-3 pb-3 @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender">

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control mb-3 pb-3 @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="dob" class="col-md-4 col-form-label text-md-end">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="text" class="form-control mb-3 pb-3 @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob">

                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="marital_status" class="col-md-4 col-form-label text-md-end">Marital Status</label>

                            <div class="col-md-6">
                                <input id="marital_status" type="text" class="form-control mb-3 pb-3 @error('marital_status') is-invalid @enderror" name="marital_status" value="{{ old('marital_status') }}" required autocomplete="marital_status">

                                @error('marital_status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="cell_group_id" class="col-md-4 col-form-label text-md-end">Cell Group</label>

                            <div class="col-md-6">
                                <input id="cell_group_id" type="text" class="form-control mb-3 pb-3 @error('cell_group_id') is-invalid @enderror" name="cell_group_id" value="{{ old('cell_group_id') }}" required autocomplete="cell_group_id">

                                @error('cell_group_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="estate_id" class="col-md-4 col-form-label text-md-end">Estate</label>

                            <div class="col-md-6">
                                <input id="estate_id" type="text" class="form-control mb-3 pb-3 @error('estate_id') is-invalid @enderror" name="estate_id" value="{{ old('estate_id') }}" required autocomplete="estate_id">

                                @error('estate_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="employment_status" class="col-md-4 col-form-label text-md-end">Employment Status</label>

                            <div class="col-md-6">
                                <input id="employment_status" type="text" class="form-control mb-3 pb-3 @error('employment_status') is-invalid @enderror" name="employment_status" value="{{ old('employment_status') }}" required autocomplete="employment_status">

                                @error('employment_status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="born_again" class="col-md-4 col-form-label text-md-end">Born Again</label>

                            <div class="col-md-6">
                                <input id="born_again" type="text" class="form-control mb-3 pb-3 @error('born_again') is-invalid @enderror" name="born_again" value="{{ old('born_again') }}" required autocomplete="born_again">

                                @error('born_again')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="leadership_id" class="col-md-4 col-form-label text-md-end">Leadership</label>

                            <div class="col-md-6">
                                <input id="leadership_id" type="text" class="form-control @error('leadership_id') is-invalid @enderror" name="leadership_id" value="{{ old('leadership_id') }}" required autocomplete="leadership_id">

                                @error('leadership_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="ministry_id" class="col-md-4 col-form-label text-md-end">Ministry</label>

                            <div class="col-md-6">
                                <input id="ministry_id" type="text" class="form-control @error('ministry_id') is-invalid @enderror" name="ministry_id" value="{{ old('ministry_id') }}" required autocomplete="ministry_id">

                                @error('ministry_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="profession_id" class="col-md-4 col-form-label text-md-end">Profession</label>

                            <div class="col-md-6">
                                <input id="profession_id" type="text" class="form-control mb-3 pb-3 @error('profession_id') is-invalid @enderror" name="profession_id" value="{{ old('profession_id') }}" required autocomplete="profession_id">

                                @error('profession_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="education_level_id" class="col-md-4 col-form-label text-md-end">Level of Education</label>

                            <div class="col-md-6">
                                <input id="education_level_id" type="text" class="form-control mb-3 pb-3 @error('education_level_id') is-invalid @enderror" name="education_level_id" value="{{ old('education_level_id') }}" required autocomplete="education_level_id">

                                @error('education_level_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control mb-3 pb-3 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control mb-3 pb-3" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
