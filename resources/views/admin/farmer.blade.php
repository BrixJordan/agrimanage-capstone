<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
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

<h1> User/Farmers</h1>

<div class="container-fluid">
    
    <div class="row">
    <div class="col-md-4">
        <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#myModal">
            <a href="{{route('users.create')}}">Add Farmer</a>
        </button>
        
    </div>
    
    <div class="col-md-4">
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
                <th>Name</th>
                <th>Last Name </th>
                <th>Address</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($farmers as $farmer)
            <!-- Example row, you can loop through your data to generate rows -->
            <tr>
                <td>{{$farmer->id}}</td>
                <td>{{$farmer->farmer_firstname}}</td>
                <td>{{$farmer->farmer_surname}}</td>
                <td>{{$farmer->address}}</td>
                <td>{{$farmer->created_at}}</td>
                <td>
                    <a href="{{route('users.edit', $farmer->id)}}" class="btn btn-primary btn-sm" >Edit</a>
                    <form action="{{route('farmer.destroy', $farmer->id)}}" method="post">
                        @csrf 
                        @method('DELETE')
                        <button type="submit">delete</button>

                    </form>
                    
                    <a href="{{route('users.view')}}" class="btn btn-light btn-sm">View</a>
                </td>
            </tr>
            @endforeach
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>
    <!-- Your dashboard content goes here -->
@endsection
    
</body>
</html>