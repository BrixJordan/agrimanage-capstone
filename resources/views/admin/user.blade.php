<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
    <!-- Custom CSS -->
    <style>

        
        .navbar {
            background-color: #469D89;
        }

        .navbar .navbar-nav .nav-item h1 {
            color: #fff;
            margin: 0;
        }

        .navbar .navbar-nav .nav-item.logout form button {
            color: #fff;
        }

        .container {
            margin-top: 20px;
        }

        .modal-content {
            border-radius: 0;
        }

        .modal-header {
            background-color: #469D89;
            color: #fff;
            border-bottom: none;
        }

        .modal-footer {
            border-top: none;
        }

        .modal-title {
            font-size: 24px;
            font-weight: bold;
        }

        .btn-success {
            background-color: #469D89;
            border: none;
        }

        .btn-success:hover {
            background-color: #357f6f;
        }

        .table {
            border: 1px solid #dee2e6;
        }

        .table th, .table td {
            border: 1px solid #dee2e6;
        }

        .table th {
            background-color: #f8f9fa;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-danger:hover {
            background-color: #b52b38;
        }
    </style>
<body>
@extends('layouts.app')

@section('content')

<h1> Users Account to the system</h1>

<div class="container-fluid">
    
    
    <div class="col-md-6">
        <form action="" method="GET" class="form-inline">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search farmers">
                <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-filter"></i></span>
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
            
        </form>
    </div>
</div>


    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Farmer Name</th>
                <th>Farmer Account</th>
             
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
<tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->surname }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->password }}</td>
    <td>
        <button type="button" class="send-account-button"
            data-email="{{ $user->email }}"
            data-password="{{ $user->password }}">
            Send Account
        </button>
    </td>
</tr>
@endforeach


        </tbody>
        
    </table>
</div>
<script>
    // Listen for a click on the "Send Account" button
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.send-account-button').forEach(function (button) {
            button.addEventListener('click', function () {
                // Get the user's email and password from the button's data attributes
                const email = button.getAttribute('data-email');
                const password = button.getAttribute('data-password');

                // Send the account information
                sendAccount(email, password);
            });
        });
    });

    // Function to send the account information
    function sendAccount(email, password) {
        // Here you can send an AJAX request to send the account information
        // If the sending is successful, display a success SweetAlert
        Swal.fire({
            icon: 'success',
            title: 'Account Information Sent',
            text: 'The account information has been sent successfully.',
        });
    }
</script>

    <!-- Your dashboard content goes here -->
@endsection
    
</body>
</html>