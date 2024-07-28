<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veg World - A Bridge between Farmers and Buyers</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .custom-btn {
            margin-right: 10px;
        }

        .container {
            padding: 0px;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
            line-height: 60px;
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{'/'}}">
                <img src="Website/Veg World Logo.png" alt="Veg World" style="max-width: 150px; height: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{'/'}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#categories">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{('about-us')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{('contact')}}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{('feedback')}}">Feedback</a>
                    </li>
                </ul>
                @if(Session::has('message'))
                <div class="alert alert-success mt-4">
                    {{ Session::get('message') }}
                </div>
                @endif
                <div class="d-flex">
                    @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary custom-btn">
                        Dashboard
                    </a>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-secondary custom-btn">
                        Log in
                    </a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-success custom-btn">
                        Register
                    </a>
                    @endif
                    @endauth
                    @endif
                    <a href="{{('cart')}}" class="btn btn-primary custom-btn">
                        <img src="Website/shopping cart.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    </a>
                </div>
            </div>
        </nav>
        <div class="row mt-5">
            <div class="col-md-6">
                <h1>Believe in your hard work<br>Get quality from the producer yourself</h1>
                <p>For the hard working farmers,<br>can't get quality product no matter how much they pay?<br> We will act as a connecting bridge for those who yearn for it..!</p>
                <a href="{{url('sellers')}}" class="btn btn-success">Continue as Seller/ Farmer &rarr;</a>
                <a href="{{url('buyers') }}" class="btn btn-primary">Continue as Buyer/ Customer &rarr;</a>
            </div>
            <div class="col-md-6">
                <img src="Website/vegetables-fruit-mixed-basket.png" class="img-fluid" alt="Mixed Vegetables">
            </div>
        </div>

    </div>
    <footer class="footer">
        <div class="container text-center">
            <p class="text-muted">&copy; 2023-2024 by Reference Data. All Rights Reserved. <br> Veg World is Powered by Veg World.CSS.</p>
        </div>
    </footer>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>