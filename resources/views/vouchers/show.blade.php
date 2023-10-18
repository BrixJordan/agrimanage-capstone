

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <!-- MDB CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css" rel="stylesheet">
</head>
<style> 
    /* body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 130px;
        background-color: #f9f9f9;
    } */

    .container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    /* Add this CSS style */
    .card-details {
        text-align: right;
    }

    .card-text {
        text-align: right;
    }

    .total-amount {
        text-align: right;
    }

    .print-button {
        text-align: right;
        margin-top: 20px;
    }
</style>
<body>
@extends('layouts.app')
@section('content')
    <div class="container py-5">
        
        <ul class="list-group list-group-flush">
        @foreach ($vouchers as $voucher)
              

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-9">
                        <p><strong>Recipient Name:</strong> {{ $voucher->farmer->first_name ?? 'N/A' }} </p>

<p><strong>Address:</strong> {{ $voucher->farmer->barangay ?? 'N/A' }}</p>
<p><strong>Intervention:</strong> {{ $voucher->stock->description ?? 'N/A' }}  {{ $voucher->stock->classification ?? 'N/A' }}</p>
<p><strong>Date Generated:</strong> {{ $voucher->date_generated }}</p>
<p><strong>Code:</strong> {{ $voucher->code }}</p>
<p><strong>Received Stock:</strong> {{ $voucher->received_stock ?? 'N/A' }} <b>bags </b></p>
<p><strong>Issued by:</strong> Department Of Agriculture</p>



                           
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>

       
    </div>

    <div class="print-button">
        <button class="btn btn-primary" onclick="window.print()">Print</button>
    </div>

    <!-- MDB JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"></script>

@endsection
</body>
</html>

