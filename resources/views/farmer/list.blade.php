<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<h1>list of farmers</h1>

<div class="class">
    <a href="#" class="btn-danger" >Generate Voucher </a>
</div>

<!-- ... (previous HTML code) ... -->

<table class="table table-bordered">
    <thead>
        <tr>
            <th><input type="checkbox" name="" id="select_all_ids"></th>
            <th>ID</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($farmers as $farmer)
        <tr>
            <td><input type="checkbox" name="ids" class="checkbox_ids" value="{{$farmer->id}}"></td>
            <td>{{$farmer->id}}</td>
            <td>{{$farmer->farmer_firstname}}</td>
            <td>{{$farmer->farmer_surname}}</td>
            <td>{{$farmer->address}}</td>
            <td>{{$farmer->created_at}}</td>
            
            <td>
                <a href="">Edit</a>
                <button>delete</button>
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script>
    $(document).ready(function(){
        $("#select_all_ids").click(function(){
            $('.checkbox_ids').prop('checked', $(this).prop('checked'));
        });
    });
</script>

@endsection

</body>
</html>
