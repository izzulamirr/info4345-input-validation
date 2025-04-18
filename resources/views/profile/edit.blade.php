
@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Edit Profile</h2>
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" id="name" 
           class="form-control @error('name') is-invalid @enderror" 
           value="{{ old('name', auth()->user()->name) }}" readonly>
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>



    <div class="form-group mb-3">
        <label for="nickname" class="form-label">Nickname</label>
        <input type="text" name="nickname" id="nickname" 
               class="form-control @error('nickname') is-invalid @enderror" 
               value="{{ old('nickname', auth()->user()->nickname) }}">
        @error('nickname')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label for="avatar" class="form-label">Avatar</label>
        <input type="file" name="avatar" id="avatar" 
               class="form-control @error('avatar') is-invalid @enderror">
        @error('avatar')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" 
               class="form-control @error('email') is-invalid @enderror" 
               value="{{ old('email', auth()->user()->email) }}">
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label for="password" class="form-label">New Password (Optional)</label>
        <input type="password" name="password" id="password" 
               class="form-control @error('password') is-invalid @enderror">
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" 
               class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="phone_no" class="form-label">Phone No</label>
        <input type="text" name="phone_no" id="phone_no" 
               class="form-control @error('phone_no') is-invalid @enderror" 
               value="{{ old('phone_no', auth()->user()->phone_no) }}">
        @error('phone_no')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label for="city" class="form-label">City</label>
        <input type="text" name="city" id="city" 
               class="form-control @error('city') is-invalid @enderror" 
               value="{{ old('city', auth()->user()->city) }}">
        @error('city')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Update Profile</button>
    </div>
    </form>

    <form action="{{ route('profile.destroy') }}" method="POST" onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.');">
    @csrf
    @method('DELETE')
    <div class="d-grid">
        <button type="submit" class="btn btn-danger">Delete Account</button>
    </div>
</form>
</form>
</div>
@endsection