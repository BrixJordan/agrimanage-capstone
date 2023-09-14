<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <style>
        /* Custom CSS for positioning the Logout button */
        .navbar {
            position: relative;
            background-color: #469D89; /* Set the background color */
            color: #fff; /* Set the text color to white */
        }

        .navbar .navbar-nav {
            margin-left: auto; /* Push the navigation items to the right */
        }

        .navbar .nav-item.logout {
            margin-left: 10px; /* Add some spacing between the Profile and Logout links */
            list-style-type: none; /* Remove bullet points */
        }
        .navbar .nav-item.logout {
            position: absolute;
            top: 0;
            right: 0;
        }

        /* Remove bullet points for the navbar */
        .navbar-nav {
            padding-left: 0;
        }

        /* Style the nav-link */
        .navbar-nav .nav-link {
            padding: 0; /* Remove default padding */
            display: flex; /* Make it a flex container to align icon and text */
            align-items: center; /* Center vertically */
        }

        /* Style the icon */
        .navbar-nav .nav-link .fas {
            margin-right: 5px; /* Add some spacing between the icon and text */
        }
    </style>

    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid"> <!-- Wrap the content in a container for proper alignment -->
        <ul class="navbar-nav ml-auto"> <!-- Use ml-auto to push the navigation to the right -->
            <li class="nav-item">
                @auth <!-- Check if the user is authenticated -->
                    <h1><span class="nav-link">Welcome, {{ auth()->user()->name }}</span></h1> <!-- Display the user's name -->
                @endauth
            </li>
            <li class="nav-item logout">
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-link nav-link">
                        <i class="fas fa-sign-out-alt"></i>  <!-- Add the icon before "Logout" -->
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
</nav>
    
</body>
</html>
