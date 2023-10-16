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
        <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#myModal">
            <a href="{{route('admin.user')}}">View Farmers generated account</a>
        </button>
        
    </div>
    
    <div class="col-md-4">
    <form action="{{ route('admin.farmer') }}" method="GET" class="form-inline">
    <div class="input-group">
        <select name="filter" class="form-control">
            <option value="">Select Barangay</option>
            <option value="Anulid">Anulid</option>
            <option value=" Atainan">Atainan</option>
            <option value=" Bersamin">Bersamin</option>
            <option value=" Canarvacanan">Canarvacanan</option>
            <option value="Caranglaan ">Caranglaan</option>
            <option value=" Curareng">Curareng</option>
            <option value=" Gualsic">Gualsic</option>
            <option value=" Kisikis">Kisikis</option>
            <option value=" Laoac">Laoac</option>
            <option value="Macyo ">Macayo</option>
            <option value="Pindangan Centro ">Pindangan Centro</option>
            <option value=" Pindangan East">Pindangan East</option>
            <option value="Pindangan West ">Pindangan West</option>
            <option value="Poblacion East ">Poblacion East</option>
            <option value="Poblacion West ">Poblacion West</option>
            <option value="San Juan ">San Juan</option>
            <option value="San Nicolas ">San Nicolas</option>
            <option value="San Pedro Apartado ">San Pedro Apartado</option>
            <option value="San Pedro ili ">San Pedro ili</option>
            <option value=" San Vicente">San Vicente</option>
            <option value="Vacante">Vacante</option>
            <!-- Add more barangay options here as needed -->
        </select>
        <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-filter"></i></span>
            <button type="submit" class="btn btn-primary">Filter</button>
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
                <th>Farmer Email Address</th>
                <th>Farmer Address</th>
                <th>Farmer Land Hectare</th>
                <th>Created Account Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($farmers as $farmer)
            
            <!-- Example row, you can loop through your data to generate rows -->
            <tr>
                <td>{{$farmer->id}}</td>
                
                <td>{{$farmer->first_name}}</td>
                <td>{{$farmer->email_add}}</td>
                <td>{{$farmer->barangay}}</td>
                <td>{{$farmer->total_farm_area}}</td>
                <td>{{$farmer->created_at}}</td>
                <td>
                    <a href="{{route('users.edit', $farmer->id)}}" class="btn btn-primary btn-sm" >Edit</a>
                    <form action="{{route('farmer.destroy', $farmer->id)}}" method="post">
                        @csrf 
                        @method('DELETE')
                        <button type="submit">delete</button>

                    </form>
                    
                    
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