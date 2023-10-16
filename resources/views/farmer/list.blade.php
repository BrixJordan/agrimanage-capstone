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
<h1>List of Farmers</h1>

<!-- Add a form to generate vouchers for selected farmers -->
<form method="post" action="{{ route('generate.vouchers') }}">
    @csrf

    <!-- Button to generate vouchers -->
    <button type="submit" class="btn btn-danger" id="generate_voucher_button" disabled>Generate Voucher</button>

    <label for="stock_description">Select Supply</label>
    <select name="stock_id">
        @foreach ($stocks as $stock)
            <option value="{{ $stock->id }}">{{ $stock->description }}</option>
        @endforeach
    </select>

    <label for="classification">Select Classification</label>
    <select name="classification">
        <option value="hybrid">Hybrid</option>
        <option value="inbred">Inbred</option>
    </select>

    
    <button>Back</button>
    <nav aria-label="Page navigation">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item active"><a class="page-link" href="#"></a></li>
        <li class="page-item"><a class="page-link" href="#"></a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav>
    


    <table class="table table-bordered">
        <thead>
            <tr>
                <th><input type="checkbox" name="select_all_ids" id="select_all_ids"></th>
                <th>ID</th>
                <th>Farmer Name</th>
                
                <th>Farmer Address</th>
                
                <th>Farmer Land Hectare</th>
                <th>Create Account Date</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($farmers as $farmer)
                <tr>
                    <td><input type="checkbox" name="ids[]" class="checkbox_ids" value="{{ $farmer->id }}"></td>
                    <td>{{ $farmer->id }}</td>
                    <td>{{ $farmer->first_name }}</td>
                    
                    <td>{{ $farmer->barangay }}</td>
                    
                    <td>{{$farmer->total_farm_area}}</td>
                    <td>{{ $farmer->created_at }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</form>



<script>
    $(document).ready(function(){
        $("#select_all_ids").click(function(){
            $('.checkbox_ids').prop('checked', $(this).prop('checked'));
            updateGenerateButtonState(); // Update the generate button state
        });

        // Update the generate button state when any checkbox is clicked
        $(".checkbox_ids").click(function() {
            updateGenerateButtonState();
        });

        // Function to enable or disable the generate button based on checkbox state
        function updateGenerateButtonState() {
            var checkboxes = $('.checkbox_ids');
            var generateButton = $('#generate_voucher_button');
            generateButton.prop('disabled', checkboxes.filter(':checked').length === 0);
        }
    });
</script>

@endsection
</body>
</html>
