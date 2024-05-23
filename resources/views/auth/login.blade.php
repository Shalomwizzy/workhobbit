@extends('layouts.app')

@section('content')
<div class="login-form">
    <input type="checkbox" id="chk" aria-hidden="true">

    <div class="login">
        <form method="POST" action="{{ route('login') }}" class="login-details">
            @csrf
            <label class="label-login" for="chk" aria-hidden="true">Log in</label>
            <input class="input login-input @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" required="" value="{{ old('email') }}" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input class="input login-input @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required="">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>

                
            @enderror
            <div class="flex-row rember-forget">
                <div class="rember">
                <input type="checkbox">
                <label>Remember me </label>
                </div>
                <span class="span forget">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                   
                    
                    
                </span>
              </div>
           
           
            {{-- <button class="login-buttonn" type="submit">Log in</button> --}}
            <button type="submit" class="btn create-acct">
                {{ __('Login') }}
            </button>
        </form>
       
    </div>
    <div>



    <div>
        <p class="mb-0 dont-acct">Don't have an account? <a href="{{ route('register') }}" class=" fw-bold">Apply</a>
       </p>
      </div>
</div>
@endsection



