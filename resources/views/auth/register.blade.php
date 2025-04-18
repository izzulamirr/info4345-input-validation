@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header text-center bg-primary text-white">
                    <h4>{{ __('Register') }}</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input type="text" name="name" id="name" 
                                   class="form-control @error('name') is-invalid @enderror" 
                                   value="{{ old('name') }}" placeholder="Enter your name" autofocus>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input type="email" name="email" id="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   value="{{ old('email') }}" placeholder="Enter your email">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input type="password" name="password" id="password" 
                                   class="form-control @error('password') is-invalid @enderror" 
                                   placeholder="Enter your password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" 
                                   class="form-control" placeholder="Confirm your password">
                        </div>

                        <div class="form-group mb-3">
                            <label for="nickname" class="form-label">{{ __('Nickname') }}</label>
                            <input type="text" name="nickname" id="nickname" 
                                   class="form-control @error('nickname') is-invalid @enderror" 
                                   value="{{ old('nickname') }}" placeholder="Enter your nickname">
                            @error('nickname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="phone_no" class="form-label">{{ __('Phone No') }}</label>
                            <input type="text" name="phone_no" id="phone_no" 
                                   class="form-control @error('phone_no') is-invalid @enderror" 
                                   value="{{ old('phone_no') }}" placeholder="Enter your phone number">
                            @error('phone_no')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="city" class="form-label">{{ __('City') }}</label>
                            <input type="text" name="city" id="city" 
                                   class="form-control @error('city') is-invalid @enderror" 
                                   value="{{ old('city') }}" placeholder="Enter your city">
                            @error('city')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <small>
                        {{ __('Already have an account?') }} 
                        <a href="{{ route('login') }}">{{ __('Login here') }}</a>
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection