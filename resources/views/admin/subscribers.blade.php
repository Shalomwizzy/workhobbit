@extends('layouts.admin')

@section('content')
<style>
    .email-subscribers {
        color: #240046;
        font-family: Arial, sans-serif;
        text-align: center; /* Center the table */
    }

    .email-subscribers table {
        width: 80%; /* Reduce the width of the table */
        margin: 0 auto; /* Center the table horizontally */
        border-collapse: collapse;
        border: 1px solid #ddd;
    }

    .email-subscribers th, .email-subscribers td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    .email-subscribers th {
        background-color: #f2f2f2;
    }

    @media only screen and (max-width: 768px) {
        .email-subscribers table {
            border: none;
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
        }

        .email-subscribers th,
        .email-subscribers td {
            border: none;
            padding: 1rem;
            display: block;
            text-align: left;
        }

        .email-subscribers td {
            text-align: right;
        }

        .email-subscribers td:before {
            content: attr(data-label);
            float: left;
            font-weight: bold;
            text-transform: uppercase;
        }
    }
</style>

<div class="container email-subscribers">
    <h1>Email Subscribers</h1>
    <p>Total Subscribers: {{ $totalSubscribers }}</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subscribers as $subscriber)
            <tr>
                <td data-label="ID">{{ $subscriber->id }}</td>
                <td data-label="Email">{{ $subscriber->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


