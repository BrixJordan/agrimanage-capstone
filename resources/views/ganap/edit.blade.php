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
    <h2>Edit Event</h2>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('ganap.update', $ganap->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Add the CSRF token -->

                <div class="form-group">
                    <label for="event_name">Event Name</label>
                    <input type="text" id="event_name" name="event_name" class="form-control" value="{{ $ganap->event_name }}" required>
                </div>

                <div class="form-group">
                    <label for="event_description">Event Description</label>
                    <input type="text" id="event_description" name="event_description" class="form-control" value="{{ $ganap->event_description }}" required>
                </div>

                <div class="form-group">
                    <label for="event_datetime">Event Date and Time</label>
                    <input type="datetime-local" id="event_datetime" name="event_datetime" class="form-control" value="{{ \Carbon\Carbon::parse($ganap->event_datetime)->format('Y-m-d\TH:i') }}" required>
                </div>

                <div class="form-group">
                    <label for="event_location">Event Location</label>
                    <input type="text" id="event_location" name="event_location" class="form-control" value="{{ $ganap->event_location }}" required>
                </div>

                <div class="form-group">
                    <label for="event_description">Event Description</label>
                    <textarea id="event_description" name="event_description" class="form-control" rows="4" required>{{ $ganap->event_description }}</textarea>
                </div>

                <!-- Add more fields if needed -->

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Event</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection



    
</body>
</html>