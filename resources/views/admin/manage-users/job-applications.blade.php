@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>All Submitted Applications</h2>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>State</th>
                            <th>Submitted At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($applications as $application)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $application->first_name }}</td>
                            <td>{{ $application->last_name }}</td>
                            <td>{{ $application->email }}</td>
                            <td>{{ $application->phone_number }}</td>
                            <td>{{ $application->state }}</td>
                            <td>{{ $application->created_at }}</td>
                            <td>
                                <a href="{{ route('job-application-details', ['applicationId' => $application->id]) }}" class="btn btn-primary">View Details</a>
                            </td>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $applications->links('vendor.pagination.bootstrap-5') }}
        </div>
    </div>
</div>

<style>
    /* Add custom CSS styles here */
    .table-responsive {
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        text-decoration: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>

@endsection
