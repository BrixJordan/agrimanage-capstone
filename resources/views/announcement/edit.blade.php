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

<div class="modal-body">
                <form method="POST" action="{{ route('events.update', $event->id) }}" enctype="multipart/form-data">
                    @csrf 
                    @method('PUT')

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
                        <button type="submit" class="btn btn-primary">Update Announcement</button>
                    </div>
                </form>
            </div>
        </div>
@endsection

    
</body>
</html>