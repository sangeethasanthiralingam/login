<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
        }
        .navbar-brand svg {
            height: 36px;
        }
        .navbar-nav .nav-link {
            padding: 0.5rem 1rem;
        }
        .nav-item .dropdown-menu {
            left: auto;
            right: 0;
        }
        .bg-light-custom {
            background-color: #f8f9fa !important;
        }
        .header {
            background-color: #ffffff;
            border-bottom: 1px solid #e9ecef;
        }
        .header h2 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 600;
        }
        .content-wrapper {
            padding: 2rem 0;
        }
        .card {
            border: none;
            border-radius: 0.375rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }
        .card-body {
            padding: 1.5rem;
        }
    </style>
</head>
<body class="bg-light">
    <div class="min-vh-100 bg-light-custom">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('dashboard') }}">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" class="h-9 w-auto fill-current text-gray-800 dark:text-gray-200">
                        <path d="M50.1 12.7c-1.2 0-2.3 0.5-3.2 1.3-1.6 1.5-1.8 4.1-0.3 5.7 3.9 4.2 6.1 9.7 6.1 15.5 0 6.1-2.5 11.7-6.6 15.8-1.4 1.4-1.4 3.8 0 5.2 1.4 1.4 3.8 1.4 5.2 0 5.6-5.6 8.7-13.1 8.7-21 0-7.6-2.9-14.8-8.1-20.2C51 13.5 50.6 13 50.1 12.7z" fill="#63AF51" />
                        <path d="M48.7 13.3c-0.7 0-1.3 0.2-1.8 0.7-1.5 1.4-1.6 3.8-0.2 5.3 2.2 2.4 3.4 5.6 3.4 9 0 3.6-1.5 6.9-4 9.3-0.9 0.9-0.9 2.5 0 3.5 0.9 0.9 2.5 0.9 3.5 0 3.6-3.5 5.6-8.3 5.6-12.8 0-4.2-1.7-8.3-4.6-11.3C50 14 49.4 13.3 48.7 13.3z" fill="#89C77F" />
                        <path d="M50 6.6c-12.3 0-22.3 10-22.3 22.3 0 6.6 2.9 12.6 7.5 16.7 0.5 0.5 0.8 1.2 0.8 1.9v18.2c0 1.5 1.2 2.7 2.7 2.7h21.9c1.5 0 2.7-1.2 2.7-2.7V47.5c0-0.7 0.3-1.4 0.8-1.9 4.6-4.2 7.5-10.1 7.5-16.7C72.3 16.6 62.3 6.6 50 6.6z M50 63.2H34.4v-16h31.2v16H50z M66.4 43.1c-3.6 3.3-8.1 5.1-12.8 5.1H46c-4.4 0-8.5-1.6-11.7-4.5 3.5-4 5.6-9.1 5.6-14.8 0-12.4-10.1-22.5-22.5-22.5 1.9-2.9 5.2-4.8 8.8-4.8 6.5 0 11.8 5.3 11.8 11.8 0 0.6 0.4 1.1 1 1.4 1.9 0.9 3.9 1.4 6 1.4 5.4 0 10.2-3 12.7-7.7 3.5 1.9 6.3 5.2 7.6 9.3C69.2 26.3 69.1 38.2 66.4 43.1z" fill="#63AF51" />
                    </svg>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link">{{ Auth::user()->name }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">{{ Auth::user()->email }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Menu
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Log Out</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Heading -->
        <header class="header">
            <div class="container py-3">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Dashboard
                </h2>
            </div>
        </header>

        <!-- Page Content -->
        <main class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                You're logged in!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
