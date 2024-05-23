@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card user-dashboard">
                <div class="card-header">{{ __('Edit Job Application') }}</div>

                <div class="card-body">
                    <form action="{{ route('update-job-application', $jobApplication) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $jobApplication->first_name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $jobApplication->last_name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $jobApplication->email }}" required>
                        </div>

                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ $jobApplication->phone_number }}" required>
                        </div>

                        <div class="form-group">
                            <label for="job">Job</label>
                            <input type="text" name="job" id="job" class="form-control" value="{{ $jobApplication->job }}" required>
                        </div>

                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" name="country" id="country" class="form-control" value="{{ $jobApplication->country }}" required>
                        </div>

                        <div class="form-group">
                            <label for="state">State</label>
                            <input type="text" name="state" id="state" class="form-control" value="{{ $jobApplication->state }}" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control" value="{{ $jobApplication->address }}" required>
                        </div>

                        <div class="form-group">
                            <label for="linkedin">LinkedIn</label>
                            <input type="url" name="linkedin" id="linkedin" class="form-control" value="{{ $jobApplication->linkedin }}">
                        </div>

                        <!-- Add other form fields for additional job application attributes -->

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
