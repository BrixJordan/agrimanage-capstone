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

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
   

<div class="container">
    <h2>Announcement</h2>
    <div class="row">
        <div class="col-md-6">
            <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#myModal">
                Add News/Announcement
            </button>
        </div>
        <div class="col-md-6">
            <form action="{{route('events.search')}}" method="GET">
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
                <th>Description</th>
                <th>Date</th>
                <th>Start Time</th>
                <th>End time</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($events as $event)
            <!-- Example row, you can loop through your data to generate rows -->
            <tr>
                <td>{{ $event->id }}</td>
                <td>
                    @if ($event->title)
                    <img src="{{ asset('images/' . $event->title) }}" alt="{{ $event->title }}" style="height: 390px;">

                    @else
                        No Image
                    @endif
                </td>
                <td>{{ $event->body }}</td>
                <td>{{ $event->event_date }}</td>
                <td>{{ $event->start_time }}</td>
                <td>{{ $event->end_time }}</td>
                <td>{{ $event->location }}</td>
                <td>
                    <a href="{{route('announcement.edit', $event->id)}}">Edit</a>
                    <form action="{{ route('announcement.destroy', $event->id) }}" method="post">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
                <h5 class="modal-title" id="exampleModalLabel">Create Announcement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data">
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
                        <label for="editEventBody">Event Description</label>
                        <textarea class="form-control" id="editEventBody" rows="4" name="body"></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="editEventDate">Date</label>
                                <input type="date" class="form-control" id="editEventDate" name="event_date">
         </div>
                        <div class="form-group">
                            <label for="startTime">Start Time</label>
        <input type="time" class="form-control" id="startTime" name="start_time">
    </div>

    <!-- End Time -->
    <div class="form-group">
        <label for="endTime">End Time</label>
        <input type="time" class="form-control" id="endTime" name="end_time">
    </div>
    </div>

                    <!-- Location -->
                    <div class="form-group">
                        <label for="editEventLocation">Location</label>
                        <input type="text" class="form-control" id="editEventLocation" name="location">
                    </div>

                    <!-- File Upload -->
                    <div class="form-group">
                        <label for="editEventFile">Upload File</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="file_path" id="editEventFile" class="form-control">
                            </div>
                        </div>
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

<!-- Modal for editing events -->


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
