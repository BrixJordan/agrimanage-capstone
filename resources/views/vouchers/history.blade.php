<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include necessary scripts and styles -->
    <!-- Include Bootstrap CSS for better styling -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4"><i class="fa fa-history" aria-hidden="true"></i> Voucher History</h1>
    <a href="{{ route('admin.stock') }}" class="btn btn-secondary mb-4">Back</a>

    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Voucher ID</th>
                <th>Farmer</th>
                <th>Intervention</th>
                <th>Voucher Code</th>
                <th>Date Generated</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vouchers as $voucher)
            <tr>
                <td>{{ $voucher->id }}</td>
                <td>{{ $voucher->farmer->first_name ?? 'N/A' }}</td>
                <td>{{ $voucher->stock->description ?? 'N/A' }}</td>
                <td>{{ $voucher->code }}</td>
                <td>{{ $voucher->date_generated }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Include Bootstrap JS for better interactivity -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
</body>
</html>
