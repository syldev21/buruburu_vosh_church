@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: red">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body"  style="background-color: blue">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label style="color:white" for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" placeholder="Your name here" type="text" class="form-control mb-3 pb-3 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label style="color:white"  for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Your email here" type="email" class="form-control mb-3 pb-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label style="color:white"  for="gender" class="col-md-4 col-form-label text-md-end">Gender</label>

                            <div class="col-md-6">
                                <select id="gender" type="text" class="form-control mb-3 pb-3 @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender">
                                    <option selected="selected" value="">--Select your Gender--</option>
                                    @foreach(config('membership.gender') as $gender)
                                        <option value="{{$gender['id']}}">{{$gender['text']}}</option>
                                    @endforeach

                                </select>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label style="color:white"  for="phone" class="col-md-4 col-form-label text-md-end">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phone" placeholder="Your phone number here" type="text" class="form-control mb-3 pb-3 @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label style="color:white"  for="dob" class="col-md-4 col-form-label text-md-end">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control mb-3 pb-3 @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob">
                                <datepicker></datepicker>
                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label style="color:white"  for="marital_status" class="col-md-4 col-form-label text-md-end">Marital Status</label>

                            <div class="col-md-6">
                                <select id="marital_status" type="text" class="form-control mb-3 pb-3 @error('marital_status') is-invalid @enderror" name="marital_status" value="{{ old('marital_status') }}" required autocomplete="marital_status">
                                    <option selected="selected" value="">--Select your Marital Status--</option>
                                    @foreach(config('membership.marital_status') as $marital_status)
                                        <option value="{{$marital_status['id']}}">{{$marital_status['text']}}</option>
                                    @endforeach
                                </select>
                                @error('marital_status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label style="color:white"  for="cell_group_id" class="col-md-4 col-form-label text-md-end">Cell Group</label>

                            <div class="col-md-6">
                                <select id="cell_group_id" type="text" class="form-control mb-3 pb-3 @error('cell_group_id') is-invalid @enderror" name="cell_group_id" value="{{ old('cell_group_id') }}" required autocomplete="cell_group_id">
                                    <option selected="selected" value="">--Select your Cell Group--</option>
                                    <option value="2">Cell Group</option>
                                </select>
                                @error('cell_group_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label style="color:white"  for="estate_id" class="col-md-4 col-form-label text-md-end">Estate</label>

                            <div class="col-md-6">
                                <select id="estate_id" type="text" class="form-control mb-3 pb-3 @error('estate_id') is-invalid @enderror" name="estate_id" value="{{ old('estate_id') }}" required autocomplete="estate_id">
                                    <option selected="selected" value="">--Select your Estate--</option>
                                    <option value="1">Estate</option>
                                </select>
                                @error('estate_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label style="color:white"  for="employment_status" class="col-md-4 col-form-label text-md-end">Employment Status</label>

                            <div class="col-md-6">
                                <select id="employment_status" type="text" class="form-control mb-3 pb-3 @error('employment_status') is-invalid @enderror" name="employment_status" value="{{ old('employment_status') }}" required autocomplete="employment_status">
                                    <option selected="selected" value="">--Select your Employment Status--</option>
                                    @foreach(config('membership.employment_status') as $employment_status)
                                        <option value="{{$employment_status['id']}}">{{$employment_status['text']}}</option>
                                    @endforeach
                                </select>
                                @error('employment_status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label style="color:white"  for="born_again" class="col-md-4 col-form-label text-md-end">Born Again?</label>

                            <div class="col-md-6">
                                <select id="born_again" type="text" class="form-control mb-3 pb-3 @error('born_again') is-invalid @enderror" name="born_again" value="{{ old('born_again') }}" required autocomplete="born_again">
                                    <option selected="selected" value="">--Select your current relationship with Christ--</option>
                                    @foreach(config('membership.flag') as $flag)
                                        <option value="{{$flag['id']}}">{{$flag['text']}}</option>
                                    @endforeach
                                </select>
                                @error('born_again')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label style="color:white"  for="leadership_id" class="col-md-4 col-form-label text-md-end">Leadership</label>

                            <div class="col-md-6">
                                <select id="leadership_id" type="text" class="form-control @error('leadership_id') is-invalid @enderror" name="leadership_id" value="{{ old('leadership_id') }}" required autocomplete="leadership_id">
                                    <option selected="selected" value="">--Select your Leadership--</option>
                                    @foreach(config('membership.flag') as $flag)
                                        <option value="{{$flag['id']}}">{{$flag['text']}}</option>
                                    @endforeach
                                </select>
                                @error('leadership_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label style="color:white"  for="ministry_id" class="col-md-4 col-form-label text-md-end">Ministry</label>

                            <div class="col-md-6">
                                <select id="ministry_id" type="text" class="form-control @error('ministry_id') is-invalid @enderror" name="ministry_id" value="{{ old('ministry_id') }}" required autocomplete="ministry_id">
                                    <option selected="selected" value="">--Select your Ministry--</option>
                                    @foreach(\App\Models\Ministry::all() as $flag)
                                        <option value="{{$flag['id']}}">{{$flag['name']}}</option>
                                    @endforeach
                                </select>
                                @error('ministry_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label style="color:white"  for="profession_id" class="col-md-4 col-form-label text-md-end">Profession</label>

                            <div class="col-md-6">
                                <select id="profession_id" type="text" class="form-control mb-3 pb-3 @error('profession_id') is-invalid @enderror" name="profession_id" value="{{ old('profession_id') }}" required autocomplete="profession_id">
                                    <option selected="selected" value="">--Select your Profession--</option>
                                    @foreach(config('membership.profession') as $profession)
                                        <option value="{{$profession['id']}}">{{$profession['text']}}</option>
                                    @endforeach
                                </select>
                                @error('profession_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label style="color:white"  for="education_level_id" class="col-md-4 col-form-label text-md-end">Level of Education</label>

                            <div class="col-md-6">
                                <select id="education_level_id" type="text" class="form-control mb-3 pb-3 @error('education_level_id') is-invalid @enderror" name="education_level_id" value="{{ old('education_level_id') }}" required autocomplete="education_level_id">
                                    <option selected="selected" value="">--Select your Level of Education--</option>
                                    @foreach(config('membership.level_of_education') as $level_of_education)
                                        <option style="background-color: yellow" value="{{$level_of_education['id']}}">{{$level_of_education['text']}}</option>
                                    @endforeach
                                </select>
                                @error('education_level_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label style="color:white"  for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Your password here" id="password" type="password" class="form-control mb-3 pb-3 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label style="color:white"  for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input placeholder="The password above here" id="password-confirm" type="password" class="form-control mb-3 pb-3" name="password_confirmation" required autocomplete="new-password">
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
