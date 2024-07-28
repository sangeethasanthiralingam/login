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
                <a class="nav-link" href="L.Pages/Contact.html">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="L.Pages/Feedback.html">Feedback</a>
            </li>
        </ul>
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