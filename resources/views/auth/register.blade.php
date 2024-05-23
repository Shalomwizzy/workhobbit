@extends('layouts.app')

@section('content')
<div class="register-form">
    <input type="checkbox" id="chk" aria-hidden="true">

    <div class="register">
        <form method="POST" action="{{ route('register') }}" class="register-details">
            @csrf
            <label for="chk" aria-hidden="true">Register</label>
            <h4 class="rgister-header">Create an account before you can apply</h4>
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
        </div>

        <div>
            <p class="mb-0 dont-acct">Already have an account? <a href="{{ route('login') }}" class=" fw-bold">Login</a>
           </p>
          </div>

     
        <button type="submit" class="btn create-acct">
            {{ __('Create Account') }}
        </button>
        </form>
    </div>
@endsection



{{-- <form method="POST" action="{{ route('register') }}">
    @csrf

    
    <input type="email" name="email" placeholder="Enter your email" value="{{ session('email') }}" required>

    <div class="">
     
            <input id="password" type="password" placeholder="Enter your password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="">
            <input id="password-confirm" type="password" placeholder="Confirm your password"  class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    


   
    

  
    
    
    <button type="submit" class="btn create-acct">
        {{ __('Create Account') }}
    </button>
</form> --}}