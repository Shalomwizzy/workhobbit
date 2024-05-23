@extends('layouts.admin')

@section('content')
<div class="container send-users">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Send Email to All Users') }}</div>
                <div class="card-body">
                    <form action="{{ route('mail.users') }}" method="post">
                        @csrf <!-- Add the CSRF token -->
                        <div class="form-group">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" name="subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" class="form-control" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send Email</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection