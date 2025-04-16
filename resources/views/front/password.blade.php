@extends('layouts.front')

@section('content')
<div class="container py-4" style="background-color: #ffffff; min-height: 100vh;">
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <div class="card p-3 rounded shadow-sm" style="background-color: #ffffff; border: none;">

            <!-- Current Password -->
            <div class="mb-3">
                <h6 class="text-muted">Current Password</h6>
                <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" placeholder="Enter current password" required>
                @error('current_password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <!-- New Password -->
            <div class="mb-3">
                <h6 class="text-muted">New Password</h6>
                <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" placeholder="Enter new password" required>
                @error('new_password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm New Password -->
            <div class="mb-3">
                <h6 class="text-muted">Confirm New Password</h6>
                <input type="password" name="new_password_confirmation" class="form-control" placeholder="Confirm new password" required>
            </div>

        </div>

        <div class="text-center my-4">
            <button type="submit" class="btn btn-lg w-100" style="background-color: #d1ab7b; color: white; border-radius: 30px;">Change Password</button>
        </div>
    </form>
</div>
@endsection
