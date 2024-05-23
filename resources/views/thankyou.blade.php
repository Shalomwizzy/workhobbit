@extends('layouts.app')

@section('content')
<div class="container thank-you">
    <h1>Thank You for Your Application</h1>
    <p>
        There's just a few steps to follow along. Your profile is about to be evaluated and assigned to an available role that best suits you. If at the time of your application we are not able to find a suitable match, we'll keep your details in our database to make sure we can consider your application for upcoming opportunities.
    </p>

    <a href="{{ route('user.dashboard') }}">
        <button type="submit" class="btn create-acct">
            {{ __('Return To Dashboad') }}
        </button>
    </a>

        {{-- <a href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a> --}}
</div>

<style>
  
    .create-acct{
        background-color: #240046;
    color: white !important;
    padding: 0.6rem;
    border-radius: 0.4rem;
    border: 2px solid;
    font-size: .95rem;
    text-decoration: none;
    cursor: pointer;
    font-family: 'Josefin Sans';
    }

    .thank-you {
        max-width: 600px;
        margin: 0 auto;
        font-family: 'Josefin Sans';
        background-color: #240046;
        margin-top: 100px !important;
        margin-bottom: 100px !important;
        color: #fff;
        text-align: center;
        padding: 20px;
    }
    .thank-you h1 {
        font-size: 32px;
        margin-bottom: 20px;
    }
    .thank-you p {
        font-size: 18px;
        line-height: 1.6;
        margin-bottom: 20px;
    }
    .thank-you form {
        margin-top: 20px;
    }
    .thank-you input[type="email"], input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
    }
    .thank-you input[type="submit"] {
        background-color: #fff;
        color: #240046;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }
    .thank-you input[type="submit"]:hover {
        background-color: #ddd;
    }
</style>
@endsection