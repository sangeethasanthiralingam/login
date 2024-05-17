@extends('layouts.layout')

@section('title', 'Choose and Buy your things Safely')

@push('styles')
<style>
    /* Add custom styles here */
    .jumbotron {
        background-color: #f8f9fa;
        padding: 30px;
        margin-top: 20px;
        text-align: center;
    }
    .logo {
        max-width: 125px;
        margin-bottom: 20px;
    }
    .cart-icon {
        float: right;
    }
    .customer-img {
        max-width: 100%;
        margin-bottom: 20px;
    }
    .continue-link {
        display: block;
        margin-top: 20px;
        text-align: center;
        color: #007bff;
    }
</style>
@endpush

@section('content')
<div class="container">
    <div class="jumbotron">
        <a href="{{ url('/') }}">
            <img src="Website/Veg World Logo.png" class="logo">
        </a>
        <a href="L.Pages/cart.html" class="cart-icon">
            <img src="Website/shopping cart.png" width="50px" height="50px">
        </a>
        <h1>Believe in your hard work<br>Get quality from the producer yourself</h1>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <img src="Website/Customer.png" class="customer-img">
            <a href="#" class="continue-link">Visit to SEE & CHECKOUT your required Products</a>
            <a href="{{ url('about-us#buyer-instructions') }}" class="continue-link">Tap here For more Details</a>
        </div>
    </div>
</div>
@endsection
