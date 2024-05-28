<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Veg World</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        .custom-btn {
            height: 40px;
            /* Adjust the height as needed */
        }
    </style>
</head>

<body>
    <div class="container">

        <header class="d-flex justify-content-between py-3">
            <div>
                     <img src="images/Veg World Logo.png" width="125px"></a>
            </div>
            @if (Route::has('login'))
            <nav class="d-flex">
                @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-primary custom-btn">
                    Dashboard
                </a>
                @else
                <a href="{{ route('login') }}" class="btn btn-secondary custom-btn">
                    Log in
                </a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-success ml-2 custom-btn">
                    Register
                </a>
                @endif
                @endauth
            </nav>
            @endif
        </header>
        <main>
            <div class="container-fluid">
            </div>
        </main>
        <footer class="text-center mt-5">
            Veg World v (application v 1.1)
        </footer>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>