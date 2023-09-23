<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* Style for the form container */
    .container {
        margin-top: 20px;
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Style for the form headings */
    h2 {
        color: #007bff;
        margin-bottom: 20px;
    }

    /* Style for form labels */
    label {
        font-weight: bold;
    }

    /* Style for form input fields */
    .form-control {
        border: 1px solid #ced4da;
        border-radius: 4px;
        padding: 10px;
        margin-bottom: 10px;
    }

    /* Style for form textarea */
    textarea.form-control {
        resize: vertical; /* Allow vertical resizing of the textarea */
    }

    /* Style for form buttons */
    .btn-secondary {
        background-color: #6c757d;
        color: #fff;
    }

    .btn-secondary:hover {
        background-color: #545b62;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>
<body>
@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Edit Supply</h2>
    <div class="row">
        <div class="col-md-12">
        <form method="POST" action="{{ route('stock.update', $stock->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="for gate_pass_no" > Gate Pass No</label>
                    <input type="text" name="gate_pass_no" id="" class="form-control" value="{{$stock->gate_pass_no}}">
                    
                </div>

                <div class="form-group">
                    <label for="for date" > Date</label>
                    <input type="date" name="date" id="" class="form-control" value="{{$stock->date}}">
                   
                </div>

                <div class="form-group">
                    <label for="for No:" >No </label>
                    <input type="number" name="no" id="" class="form-control" value="{{$stock->no}}">
                    
                </div>

                <div class="form-group">
                    <label for="for quantity" >Quantity </label>
                    <input type="text" name="quantity" id="" class="form-control" value="{{$stock->quantity}}">
                    
                </div>

                <div class="form-group">
                    <label for="for Unit" > Unit</label>
                    <input type="text" name="unit" id="" class="form-control" value="{{$stock->unit}}">
                    
                </div>

                <div class="form-group">
                    <label for="for description" > Description</label>
                    <input type="text" name="description" id="" class="form-control" value="{{$stock->description}}">
                    
                </div>

                <div class="form-group">
                    <label for="for allocation" >Allocation </label>
                    <input type="text" name="allocation" id="" class="form-control" value="{{$stock->allocation}}">
                    
                </div>

                <div class="form-group">
                    <label for="for balance" >Balance </label>
                    <input type="text" name="balance" id="" class="form-control" value="{{$stock->balance}}">
                    
                </div>

                <div class="form-group">
                    <label for="for lot_number" >Lot Number </label>
                    <input type="text" name="lot_number" id="" class="form-control" value="{{$stock->lot_number}}">
                    
                </div>

                <div class="form-group">
                    <label for="for requesting_officer" >Requesting Officer </label>
                    <input type="text" name="requesting_officer" id="" class="form-control" value="{{$stock->requesting_officer}}">
                    
                </div>

                <div class="form-group">
                    <label for="for authorized_by" >Authorized By</label>
                    <input type="text" name="authorized_by" id="" class="form-control" value="{{$stock->authorized_by}}">
                    
                </div>

                <div class="form-group">
                    <label for="for recieved_by" >Recieved by </label>
                    <input type="text" name="received_by" id="" class="form-control" value="{{$stock->received_by}}">
                    
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Update Supply</button>
            </form>
        </div>
    </div>
</div>



@endsection
</body>
</html>