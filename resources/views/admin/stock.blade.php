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
            Record supply
        </button>
        <button type="button" class="btn btn-success mb-3" >
            <a href="{{route('farmer.list')}}">Farmers List</a>
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

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Gate Pass NO</th>
            <th>Quantity</th>
            <th>Unit</th>
            <th>Description</th>
            <th>Allocation</th>
            <th>Balance</th>
            <th>Requesting Officer</th>
            <th>Authorized By</th>
            <th>Recieved By</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($stocks as $stock)
        <tr>
            <td>{{$stock->id}}</td>
            <td>{{$stock->gate_pass_no}}</td>
            <td>{{$stock->quantity}}</td>
            <td>{{$stock->unit}}</td>
            <td>{{$stock->description}}</td>
            <td>{{$stock->allocation}}</td>
            <td>{{$stock->balance}}</td>
            <td>{{$stock->requesting_officer}}</td>
            <td>{{$stock->authorized_by}}</td>
            <td>{{$stock->received_by}}</td>
            <td>
                <a href="{{route('stock.edit', $stock->id)}}">Edit</a>
                <form action="{{route('stock.destroy', $stock->id)}}" method="post">
                    @csrf 
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
    
</table>

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

                <div class="form-group">
                    <label for="for gate_pass_no" > Gate Pass No</label>
                    <input type="text" name="gate_pass_no" id="" class="form-control">
                    @error('gate_pass_no')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                    <label for="for date" > Date</label>
                    <input type="date" name="date" id="" class="form-control">
                    @error('date')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                    <label for="for No:" >No </label>
                    <input type="number" name="no" id="" class="form-control">
                    @error('no')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                    <label for="for quantity" >Quantity </label>
                    <input type="text" name="quantity" id="" class="form-control">
                    @error('quantity')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                    <label for="for Unit" > Unit</label>
                    <input type="text" name="unit" id="" class="form-control">
                    @error('unit')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                    <label for="for description" > Description</label>
                    <input type="text" name="description" id="" class="form-control">
                    @error('description')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                    <label for="for allocation" >Allocation </label>
                    <input type="text" name="allocation" id="" class="form-control">
                    @error('allocation')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                    <label for="for balance" >Balance </label>
                    <input type="text" name="balance" id="" class="form-control">
                    @error('balance')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                    <label for="for lot_number" >Lot Number </label>
                    <input type="text" name="lot_number" id="" class="form-control">
                    @error('lot_number')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                    <label for="for requesting_officer" >Requesting Officer </label>
                    <input type="text" name="requesting_officer" id="" class="form-control">
                    @error('requesting_officer')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                    <label for="for authorized_by" >Authorized By</label>
                    <input type="text" name="authorized_by" id="" class="form-control">
                    @error('authorized_by')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                    <label for="for recieved_by" >Recieved by </label>
                    <input type="text" name="received_by" id="" class="form-control">
                    @error('received_by')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
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


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



@endsection
</body>
</html>
