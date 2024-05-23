{{-- @extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h2>Send Email</h2>
            <form action="{{ route('email-user', ['userId' => $user->id]) }}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <div class="mb-3">
                    <label for="subject" class="col-form-label">Subject:</label>
                    <input type="text" class="form-control" name="subject">
                </div>
                <div class="mb-3">
                    <label for="message" class="col-form-label">Message:</label>
                    <textarea class="form-control" name="message" rows="5" required></textarea> <!-- Changed from body to message -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send message</button>
                </div>
            </form>
            
        </div>
    </div>
</div>

@endsection --}}


<!-- resources/views/admin/send-email-to-subscribers.blade.php -->

@extends('layouts.admin')

@section('content')
<div class="container mail-subscribers-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mail-subscribers-card">
                <div class="card-header text-center mail-subscribers-card-header">{{ __('Send Email') }}</div>

                <div class="card-body mail-subscribers-card-body">
                    @if(session('success'))
                        <div class="alert alert-success mail-subscribers-alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="mb-3">
                        <p class="mb-0"><strong>Emailing:</strong> {{ $user->email }}</p>
                    </div>

                    <form action="{{ route('email-user', ['userId' => $user->id]) }}" method="POST">
                        @csrf

                        <div class="form-group mail-subscribers-form-group">
                            <label for="subject" class="form-label">{{ __('Subject') }}</label>
                            <input type="text" id="subject" name="subject" class="form-control mail-subscribers-form-control" required>
                        </div>

                        <div class="form-group mail-subscribers-form-group">
                            <label for="message" class="form-label">{{ __('Message') }}</label>
                            <textarea id="message" name="message" class="form-control mail-subscribers-form-control" rows="5" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mail-subscribers-btn-primary">{{ __('Send Email') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection










