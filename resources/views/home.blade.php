@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card user-dashboard">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (isset($jobApplication))
                       <h4>Basic Information</h4>
                        <p>First Name: {{ $jobApplication->first_name }}</p>
                        <p>Last Name: {{ $jobApplication->last_name }}</p>
                        <p>Email: {{ $jobApplication->email }}</p>
                        <p>Phone Number: {{ $jobApplication->phone_number }}</p>
                        <p>Job: {{ $jobApplication->job }}</p>
                        <p>Country: {{ $jobApplication->country }}</p>
                        <p>State: {{ $jobApplication->state }}</p>
                        <p>Address: {{ $jobApplication->address }}</p>
                        <p>LinkedIn: {{ $jobApplication->linkedin }}</p>

                        @if (Str::endsWith($jobApplication->resume, ['.pdf', '.doc', '.docx'])) <!-- Check if file is PDF, Word, or similar -->
                        <p>Resume: <a href="{{ asset($jobApplication->resume) }}" target="_blank">{{ __('Preview Resume') }}</a> | <a href="{{ asset($jobApplication->resume) }}" download>{{ __('Download Resume') }}</a></p>
                    @else
                        <p>Resume: <a href="{{ asset($jobApplication->resume) }}" download>{{ __('Download Resume') }}</a></p>
                    @endif

                                        <!-- Additional Information -->
                                        <h4>Additional Information</h4>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Position</th>
                                                    <th>Location</th>
                                                    <th>Application Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ $jobApplication->job }}</td>
                                                    <td>{{ $jobApplication->country }}</td>
                                                    <td>{{ $jobApplication->created_at->format('F j, Y') }}</td>
                                                </tr>
                                            </tbody>
                                        </table>

                        <!-- Application Submitted Message -->
                        <div class="mt-3 text-muted">
                            <p>Your application has been submitted successfully. We will reach out to you via the email provided. Please note that you can apply for more than one job due to our policy.</p>
                        </div>

                        <!-- Edit button -->
                        <a href="{{ route('edit-job-application', $jobApplication) }}" class="btn btn-primary">{{ __('Edit') }}</a>


                    @else
                        <!-- Display user's email -->
                        <p>Email: {{ $email }}</p>
                        <p>You are yet to submit a job application.</p>

                        <!-- Apply Now button -->
                        <a href="{{ route('apply-now') }}" class="btn btn-appliy">{{ __('Apply Now') }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




