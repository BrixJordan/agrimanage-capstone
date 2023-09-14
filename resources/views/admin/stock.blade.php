<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        /* Your custom styles here */
    </style>
</head>
<body>
@extends('layouts.app')

@section('content')

<h2>Supplies Stock</h2>
<div class="row">
    <div class="col-md-6">
        <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#myModal">
            Add Stocks
        </button>
    </div>
    <div class="col-md-6">
        <form action="" method="GET" class="form-inline">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search stocks">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-filter"></i></span>
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- ... Previous HTML code ... -->

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Description</th>
            <th>Stocks Quantity</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($stocks as $stock)
    <tr>
        <td>{{ $stock->id }}</td>
        <td>
            @if ($stock->stock_image)
                <img src="{{ asset('images/' . $stock->stock_image) }}" alt="Stock Image" width="100">
            @else
                No Image
            @endif
        </td>
        <td>{{ $stock->stock_description }}</td>
        <td>{{ $stock->stock_quantity }}</td>
        <td>{{ $stock->stock_date }}</td>
        <td>
            <button type="button" class="btn btn-primary" data-id="{{route('stock.edit', $stock->id) }}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Edit
            </button>
            <form action="{{ route('stock.destroy', $stock->id) }}" method="post">
                @csrf 
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

<!-- ... Rest of your HTML code ... -->


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Add Stock</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <!-- Modal Body -->
        <div class="modal-body">
            <!-- Form for adding stock information -->
            <form method="POST" action="{{ route('addStock') }}" enctype="multipart/form-data">
                @csrf

                <!-- Image Input -->
                <div class="form-group">
                    <label for="stock_image">Image</label>
                    <input type="file" name="stock_image" id="stock_image" class="form-control">
                </div>

                <!-- Description Input -->
                <div class="form-group">
                    <label for="stock_description">Description</label>
                    <textarea name="stock_description" id="stock_description" class="form-control"></textarea>
                </div>

                <!-- Stocks Input -->
                <div class="form-group">
                    <label for="stock_quantity">Stocks</label>
                    <input type="number" name="stock_quantity" id="stock_quantity" class="form-control">
                </div>

                <!-- Date Input -->
                <div class="form-group">
                    <label for="stock_date">Date</label>
                    <input type="date" name="stock_date" id="stock_date" class="form-control">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Add Stock</button>
            </form>
        </div>

        <!-- Modal Footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <!-- Form for adding stock information -->
            <form method="POST" action="{{route('stock.update', $stock->id)}}" enctype="multipart/form-data" id="editStockForm">
                @csrf
                @method('PUT')
                <input type="hidden" name="stock_id" id="edit_stock_id">

                <!-- Image Input -->
                <div class="form-group">
                    <label for="edit_stock_image">Image</label>
                    <input type="file" name="stock_image" id="edit_stock_image" class="form-control" value="{{$stock->stock_image}}">
                </div>

                <!-- Description Input -->
                <div class="form-group">
                    <label for="edit_stock_description">Description</label>
                    <textarea name="stock_description" id="edit_stock_description" class="form-control" >{{ $stock->stock_description }}</textarea>
                </div>

                <!-- Stocks Input -->
                <div class="form-group">
                    <label for="edit_stock_quantity">Stocks</label>
                    <input type="number" name="stock_quantity" id="edit_stock_quantity" class="form-control" value="{{$stock->stock_quantity}}">
                </div>

                <!-- Date Input -->
                <div class="form-group">
                    <label for="edit_stock_date">Date</label>
                    <input type="date" name="stock_date" id="edit_stock_date" class="form-control" value="{{$stock->stock_date}}">
                </div>

                <!-- Submit Button -->
                
            
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



@endsection
</body>
</html>
