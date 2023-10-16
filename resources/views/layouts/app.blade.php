<!DOCTYPE html>
<html>
<head>
    <!-- Include CSS and JavaScript libraries -->
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    t">

</head>
<style>
    /* Add CSS styles for your sidebar */
    body {
        background-color: #f8f9fa;
    }

    .sidebar {
        background-color: #333;
        color: #fff;
        width: 250px;
        height: 100%;
        position: fixed;
        left: 0;
        top: 0;
        padding-top: 20px;
        overflow-y: auto;
    }

    .sidebar ul {
        list-style-type: none;
        padding: 0;
    }

    .sidebar li {
        padding: 10px 0;
    }

    .sidebar a {
        color: #fff;
        text-decoration: none;
        display: flex;
        align-items: center;
        padding: 10px 20px;
        transition: background-color 0.3s ease;
    }

    .sidebar a:hover {
        background-color: #555;
    }

    /* Center the logo both horizontally and vertically */
    .logo {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100px;
    }

    /* Make the logo circular */
    .circular-logo {
        border-radius: 50%;
        width: 80px;
        height: 80px;
    }

    /* Style the main content area */
    main {
        margin-left: 250px;
        padding: 20px;
    }

    /* Style the sidebar icons */
    .sidebar i {
        margin-right: 10px;
    }

    /* Dropdown menu styles */
    .dropdown-menu {
        background-color: #333;
        color: #fff;
        border: none;
    }

    .dropdown-item {
        color: #fff !important;
        padding: 10px 20px;
        transition: background-color 0.3s ease;
    }

    .dropdown-item:hover {
        background-color: #555;
    }

    .dropdown-toggle {
        color: #fff;
        text-decoration: none;
        display: flex;
        align-items: center;
        padding: 10px 20px;
        transition: background-color 0.3s ease;
    }

    .dropdown-toggle:hover {
        background-color: #555;
    }
</style>
<body>
    <aside class="sidebar">
        <div class="logo">
            <img src="{{ asset('image/logo.jpg') }}" alt="Your Logo" class="circular-logo">
        </div>

        <ul>
            <li><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="{{ route('admin.announcement') }}"><i class="fas fa-newspaper"></i> News and Update</a></li>
            <li><a href="{{route('admin.event')}}"><i class="fas fa-calendar"></i>Events</a></li>
            <li><a class="dropdown-item" href="{{ route('admin.stock') }}"><i class="fas fa-chart-line"></i> Supply Management</a></li>
            <li><a href="{{ route('admin.farmer') }}"><i class="fas fa-users"></i>RSBSA Enrollment form</a></li>
            <li><a href="{{ route('admin.user') }}"><i class="fas fa-users"></i> Users Accounts</a></li>
            <li><a href="{{ route('admin.transaction') }}"><i class="fas fa-tractor"></i> Farmers Transaction</a></li>
            <li><a href="{{ route('admin.notification') }}"><i class="fas fa-bell"></i> Notifications</a></li>
            
            <li class="nav-item logout" style="display: flex; align-items: center;">
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-link nav-link">
            <i class="fas fa-sign-out-alt"></i>
            Logout
        </button>
    </form>
</li>
        </ul>
    </aside>
    <main>
        @yield('content')
    </main>
</body>
</html>
