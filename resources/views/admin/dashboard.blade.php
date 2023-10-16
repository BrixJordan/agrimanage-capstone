<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Home page</title>
</head>
<style>
        /* Custom CSS for the dashboard */
        .dashboard-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }

        .dashboard-row {
            width: 100%;
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .dashboard-card {
            flex: 1;
            background-color: #f5f5f5;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
        }

        .dashboard-card h3 {
            font-size: 24px;
        }

        .dashboard-card p {
            font-size: 18px;
            color: #333;
        }
    </style>
<body>
    @extends('layouts.app')

    @section('content')
        <!-- Include the header navigation -->

        <div>
       

<div class="container">
    <div><h1>Home</h1></div>
<div class="dashboard-row">
    <!-- First Group in the First Row -->
    <div class="dashboard-card">
        <i class="fas fa-users fa-3x"></i> <!-- Add an icon for Total Members -->
        <h3>Total Members </h3>
        
        
    </div>
    <div class="dashboard-card">
        <i class="fas fa-boxes fa-3x"></i> <!-- Add an icon for Total Supplies -->
        <h3>Total Supplies</h3>
    </div>
</div>
<br><br>

<div class="dashboard-row">
    <!-- Second Group in the Second Row -->
    <div class="dashboard-card">
        <i class="fas fa-bullhorn fa-3x"></i> <!-- Add an icon for Total Announcements -->
        <h3>Total Announcements</h3>
    </div>
    <div class="dashboard-card">
        <i class="fas fa-bell fa-3x"></i> <!-- Add an icon for Total Notifications -->
        <h3>Total Notifications</h3>
    </div>
</div>
<br>
<br>

<div class="dashboard-row">
    <!-- Second Group in the Second Row -->
    <div class="dashboard-card">
        <i class="fas fa-user fa-3x"></i> <!-- Add an icon for Total Announcements -->
        <h3>Total Accounts</h3>
    </div>
    <div class="dashboard-card">
        <i class="fas fa-calendar fa-3x"></i> <!-- Add an icon for Total Notifications -->
        <h3>Total Events</h3>
    </div>
</div>
<br><br>
<div class="dashboard-row">
    <!-- Second Group in the Second Row -->
    <div class="dashboard-card">
        <i class="fas fa-user fa-3x"></i> <!-- Add an icon for Total Announcements -->
        <h3>Total Voucher Generated</h3>
    </div>
    <div class="dashboard-card">
        <i class="fas fa-calendar fa-3x"></i> <!-- Add an icon for Total Notifications -->
        <h3>Total Farmers Transaction</h3>
    </div>
</div>

</div>

    @endsection
</body>
</html>
