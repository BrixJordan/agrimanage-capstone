<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Event Management</title>

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
</head>
<body>
@extends('layouts.app')

@section('content')
   

<div class="container">
    <h2>Event List</h2>
    <div class="row">
        <div class="col-md-6">
            <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#myModal">
                Add Events
            </button>
        </div>
        <div class="col-md-6">
            <form action="{{route('ganaps.search')}}" method="GET">
                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control" placeholder="Search events">
                    <div class="input-group-append">
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
                <th>Title</th>
                <th>Name</th>
                <th>Date</th>
                <th>Location</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ganaps as $ganap)
        
            <!-- Example row, you can loop through your data to generate rows -->
            <tr>
                <td>{{$ganap->id}}</td>
                <td> @if ($ganap->title)
                        <img src="data:images/jpeg;base64,{{ base64_encode($ganap->title) }}" alt="Event Image" width="100">
                    @else   
                        No Image
                    @endif</td>
                <td>
                   {{$ganap->event_name}}
                </td>
                
                
                
                <td>{{$ganap->event_datetime}}</td>
                <td>{{$ganap->event_location}}</td>
                <td>{{$ganap->event_description}}</td>
                <td>
                    <a href="{{route('ganap.edit', $ganap->id)}}">Edit</a>
                    <form action="{{route('event.destroy', $ganap->id)}}" method="post">
                        @csrf 
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
                
            </tr>
            @endforeach
        
        <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

<!-- Modal for creating events -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <!-- Modal content for creating events -->
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('event.store')}}" enctype="multipart/form-data">
                    @csrf <!-- Add the CSRF token -->

                    <!-- Title (as an image) -->
                    <div class="form-group">
                        <label for="eventTitle">Event Title</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="title" id="eventTitle" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- Body -->
                    <div class="form-group">
            <label for="event_name">Event Name</label>
            <input type="text" id="event_name" name="event_name" class="form-control" required>
        </div>
      

        <!-- Event Date and Time -->
        <div class="form-group">
            <label for="event_datetime">Event Date and Time</label>
            <input type="datetime-local" id="event_datetime" name="event_datetime" class="form-control" required>
        </div>

        <!-- Event Location -->
        <div class="form-group">
            <label for="event_location">Event Location</label>
            <input type="text" id="event_location" name="event_location" class="form-control" required>
        </div>

        <!-- Event Description -->
        <div class="form-group">
            <label for="event_description">Event Description</label>
            <textarea id="event_description" name="event_description" class="form-control" rows="4" required></textarea>
        </div>

                    <!-- Other event fields (e.g., description, date, duration, location) -->
                    <!-- Add your form fields for creating events here -->

                    <!-- Save Event Button -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Event</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Custom JavaScript for handling the edit button click -->
<script>
    // When an "Edit" button is clicked, populate the edit modal with event data
    $('.edit-btn').click(function () {
        var eventId = $(this).data('id');
        $('#editEventId').val(eventId); // Set the event ID for updating
        $('#editEventTitle').val($(this).data('title'));
        $('#editEventBody').val($(this).data('body'));
        $('#editEventDate').val($(this).data('event-date'));
        $('#editEventHour').val($(this).data('event-hour'));
        $('#editEventMinute').val($(this).data('event-minute'));
        $('#editEventDuration').val($(this).data('duration-minutes'));
        $('#editEventLocation').val($(this).data('location'));
    });
</script>

</body>
</html>
