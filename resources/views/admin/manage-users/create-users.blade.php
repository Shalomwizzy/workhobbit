@extends('layouts.admin')

@section('content')

<div class="register-form">
    {{-- <input type="checkbox" id="chk" aria-hidden="true"> --}}

    <div class=" admin-register">
        <form method="POST" action="{{ route('admin.users.store') }}" class="register-details">
            @csrf
            <label for="chk" aria-hidden="true">Register</label>
            <p>Create an account before you can apply</p>
            <input class="input @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" required="" value="" required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input class="input @error('username') is-invalid @enderror" type="username" name="username" placeholder="Username" required="" value="" required>
            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror


            <input id="password" type="password" placeholder="Enter your password" class=" register-input form-control @error('password') is-invalid @enderror"  name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="">
                <input id="password-confirm" type="password" placeholder="Confirm your password"  class="form-control register-input " name="password_confirmation" required autocomplete="new-password">
            </div>

            <!-- Role selection dropdown with placeholder -->
            <div class="">
                <select class="form-control"  id="role" name="role" required>
                    <option value="" disabled selected>Select Role</option>
                    <option value="admin">Admin</option>
                    <option value="guest">Guest</option>
                </select>
            </div>
            
        </div>

        <button type="submit" class="btn create-acct">
            {{ __('Create Account') }}
        </button>
       
        </form>
    </div>


    
@endsection








{{-- <div class="form-group">
    <label for="role">Role</label>
    <select class="form-control" id="role" name="role">
        <option value="admin">Admin</option>
        <option value="guest">Guest</option>
    </select>
</div> --}}