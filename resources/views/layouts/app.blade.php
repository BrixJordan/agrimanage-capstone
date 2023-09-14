<!DOCTYPE html>
<html>
<head>
    <!-- Include CSS and JavaScript libraries -->
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
    /* Add CSS styles to style your sidebar */
    .sidebar {
        background-color: #333;
        color: #fff;
        width: 250px;
        height: 100%;
        position: fixed;
        left: 0;
        top: 0;
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
        height: 150px;
        /* Adjust the height as needed */
    }

    /* Make the logo circular */
    .circular-logo {
        border-radius: 50%;
        width: 100px; /* Adjust the width as needed */
        height: 100px; /* Should match width for a perfect circle */
    }

    /* Style the main content area */
    main {
        margin-left: 250px; /* Adjust the margin to match your sidebar width */
        padding: 20px;
    }

    /* Style the sidebar icons */
    .sidebar i {
        margin-right: 10px;
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
            <li><a href="{{ route('admin.stock') }}"><i class="fas fa-chart-line"></i> Inventory Stocks</a></li>
            <li><a href="{{ route('admin.farmer') }}"><i class="fas fa-users"></i> Farmer</a></li>
            <li><a href="{{ route('admin.user') }}"><i class="fas fa-users"></i> Users</a></li>
            <li><a href="{{ route('admin.notification') }}"><i class="fas fa-bell"></i> Notifications</a></li>
            <li><a href="{{ route('admin.profile') }}"><i class="fas fa-user"></i> Profile</a></li>
            <li><a href="{{ route('admin.setting') }}"><i class="fas fa-cog"></i> Settings</a></li>
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
