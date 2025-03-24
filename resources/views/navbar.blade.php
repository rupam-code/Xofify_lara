<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixed Navbar with Hover Effect</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/fontawesome.min.css" integrity="sha512-v8QQ0YQ3H4K6Ic3PJkym91KoeNT5S3PnDKvqnwqFD1oiqIl653crGZplPdU5KKtHjO0QKcQ2aUlQZYjHczkmGw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            padding-top: 70px; /* Add padding to body to account for fixed navbar */
        }
        .navbar {
            background-color: #343a40;
            padding: 1rem 0;
            position: fixed; /* Make navbar fixed */
            top: 0; /* Stick to the top */
            width: 100%; /* Full width */
            z-index: 1000; /* Ensure it stays on top of other content */
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #ffffff !important;
        }
        .navbar-nav .nav-link {
            color: #ffffff !important;
            margin: 0 0.5rem;
            font-size: 1rem;
            transition: color 0.3s ease, background-color 0.3s ease; /* Smooth transition for hover */
            padding: 0.5rem 1rem; /* Add padding for better hover area */
            border-radius: 5px; /* Rounded corners for hover effect */
        }
        .navbar-nav .nav-link:hover {
            color: #ffc107 !important; /* Change text color on hover */
            background-color: rgba(255, 255, 255, 0.1); /* Add a subtle background on hover */
        }
        .navbar-toggler {
            border-color: #ffffff;
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }
        .fa-icon {
            margin-right: 0.5rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand text-white" href="{{ url('/') }}">Xofify</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/product') }}"><i class="fa-icon fa-solid fa-box"></i> Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}"><i class="fa-icon fa-solid fa-info-circle"></i> About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}"><i class="fa-icon fa-solid fa-envelope"></i> Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/cart_view') }}"><i class="fa-icon fa-solid fa-shopping-cart"></i> Cart</a>
                    </li>
                    @if(Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-icon fa-solid fa-user"></i> Welcome, {{ Auth::user()->name }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/logout') }}"><i class="fa-icon fa-solid fa-sign-out-alt"></i> Logout</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login') }}"><i class="fa-icon fa-solid fa-right-to-bracket"></i> Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/sign_up') }}"><i class="fa-icon fa-solid fa-user-plus"></i> Sign Up</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>