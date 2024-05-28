<!-- resources/views/customer/portal.blade.php -->
@extends('layouts.layout')

@section('content')
<div class="container">
    <h1>Customer Portal</h1>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link">{{ Auth::user()->name }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link">{{ Auth::user()->email }}</a>
        </li>
        <li class="nav-item dropdown"> <!-- Add dropdown class here -->
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profile <!-- Dropdown trigger text -->
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
    <p>Welcome to the customer portal.</p>
</div>
@endsection