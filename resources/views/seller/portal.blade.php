<div class="container py-5">
    <h1 class="mb-4">Seller Portal</h1>
    <ul class="nav flex-column flex-sm-row mb-4">
        <li class="nav-item me-3">
            <span class="nav-link text-primary">{{ Auth::user()->name }}</span>
        </li>
        <li class="nav-item me-3">
            <span class="nav-link text-secondary">{{ Auth::user()->email }}</span>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profile
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="{{ route('vegetables.index') }}">Vegetables</a></li> <!-- Updated link -->
                <li><a class="dropdown-item" href="#">Orders</a></li>
                <li><hr class="dropdown-divider"></li>
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
    <p class="lead">Welcome to the seller portal.</p>
</div>

