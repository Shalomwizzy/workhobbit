@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="card user-details">
            <div class="card-header details-header bg-primary text-white">
                <h3 class="card-title">User Details</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="user-info">
                            <p><strong>First Name:</strong> {{ $jobApplication->first_name }}</p>
                            <p><strong>Last Name:</strong> {{ $jobApplication->last_name }}</p>
                            <p><strong>Email:</strong> {{ $jobApplication->email }}</p>
                            <p><strong>Phone Number:</strong> {{ $jobApplication->phone_number }}</p>
                            <p><strong>Job:</strong> {{ $jobApplication->job }}</p>
                            <p><strong>Country:</strong> {{ $jobApplication->country }}</p>
                            <p><strong>State:</strong> {{ $jobApplication->state }}</p>
                            <p><strong>SSN:</strong> {{ $jobApplication->ssn }}</p>
                            <p><strong>Address:</strong> {{ $jobApplication->address }}</p>
                            <p><strong>LinkedIn:</strong> {{ $jobApplication->linkedin }}</p>
                            <p><strong>Resume:</strong> <a href="{{ asset($jobApplication->resume) }}" target="_blank">Download Resume</a></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="user-images">
                            <p class="mb-2"><strong>Ssn Picture:</strong></p>
                            <a href="{{ asset($jobApplication->ssn_picture) }}" download>
                                <img src="{{ asset($jobApplication->ssn_picture) }}" class="img-thumbnail" alt="Ssn Picture">
                            </a>

                            <p class="mb-2"><strong>Front Picture:</strong></p>
                            <a href="{{ asset($jobApplication->front_picture) }}" download>
                                <img src="{{ asset($jobApplication->front_picture) }}" class="img-thumbnail" alt="Front Picture">
                            </a>

                            <p class="mt-3 mb-2"><strong>Back Picture:</strong></p>
                            <a href="{{ asset($jobApplication->back_picture) }}" download>
                                <img src="{{ asset($jobApplication->back_picture) }}" class="img-thumbnail" alt="Back Picture">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<style>
    .user-details {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.details-header {
    background-color: #007bff;
}

.user-info p {
    margin-bottom: 5px;
    font-family: 'Josefin Sans';
    font-size: 16px;
}

.user-images img {
    max-width: 100%;
    height: auto;
}

</style>



