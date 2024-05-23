<!-- resources/views/admin/send-email-to-subscribers.blade.php -->

@extends('layouts.admin')

@section('content')
<div class="container mail-subscribers-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mail-subscribers-card">
                <div class="card-header mail-subscribers-card-header">{{ __('Send Email to Subscribers') }}</div>

                <div class="card-body mail-subscribers-card-body">
                    @if(session('success'))
                        <div class="alert alert-success mail-subscribers-alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.send-email-to-subscribers') }}" method="POST">
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






