@extends('layouts.layout')

@section('title', 'About Us')

@push('styles')
    <style>
        body {
            padding-top: 20px;
        }

        h2,
        h4 {
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 20px;
        }

        .section-title {
            margin-top: 40px;
        }

        .logo {
            width: 125px;
        }
    </style>
@endpush

@section('content')
    <div class="container text-center">
        <a href="{{ url('/') }}">
            <img src="Website/Veg World Logo.png" alt="Veg World Logo" class="img-fluid logo">
        </a>
        <h2>Would you like to know About us<br>please scroll the page</h2>
        <p><img src="Website/About.png" alt="About Us" class="img-fluid"></p>
    </div>

    <div class="container">
        <div class="col">
            <!-- Common Instructions -->
            <div class="row-md-4">
                <h4 class="section-title">Common Instructions</h4>
                <p>Working with their own <strong>sweat</strong> as a <strong>capital</strong>, buying their labor to some trader advancing them and their families.<br>
                    For the laboring farmers who work without knowing how to recover from it.</p>
                    <p>Working with their own <strong>sweat</strong> as a <strong>capital</strong>, buying their labor to some trader advancing them and their families.<br>
                    For the laboring farmers who work without knowing how to recover from it.</p><p>Working with their own <strong>sweat</strong> as a <strong>capital</strong>, buying their labor to some trader advancing them and their families.<br>
                    For the laboring farmers who work without knowing how to recover from it.</p><p>Working with their own <strong>sweat</strong> as a <strong>capital</strong>, buying their labor to some trader advancing them and their families.<br>
                    For the laboring farmers who work without knowing how to recover from it.</p><p>Working with their own <strong>sweat</strong> as a <strong>capital</strong>, buying their labor to some trader advancing them and their families.<br>
                    For the laboring farmers who work without knowing how to recover from it.</p><p>Working with their own <strong>sweat</strong> as a <strong>capital</strong>, buying their labor to some trader advancing them and their families.<br>
                    For the laboring farmers who work without knowing how to recover from it.</p>
            </div>

            <!-- Seller/Farmer Instructions -->
            <div class="row-md-4" id="seller-instructions">
                <h4 class="section-title">Seller/Farmer Instructions</h4>
                <p>Farmers can register their products with Veg World, ensuring their goods reach a larger market. Follow these steps to register and manage your products effectively.</p>
                <p>For detailed guidelines on improving product quality and handling, refer to our agricultural best practices manual available on our website.</p>
                <p>Farmers can register their products with Veg World, ensuring their goods reach a larger market. Follow these steps to register and manage your products effectively.</p>
                <p>For detailed guidelines on improving product quality and handling, refer to our agricultural best practices manual available on our website.</p>           <p>Farmers can register their products with Veg World, ensuring their goods reach a larger market. Follow these steps to register and manage your products effectively.</p>
                <p>For detailed guidelines on improving product quality and handling, refer to our agricultural best practices manual available on our website.</p>           <p>Farmers can register their products with Veg World, ensuring their goods reach a larger market. Follow these steps to register and manage your products effectively.</p>
                <p>For detailed guidelines on improving product quality and handling, refer to our agricultural best practices manual available on our website.</p>
            </div>

            <!-- Buyer Instructions -->
            <div class="row-md-4" id="buyer-instructions">
                <h4 class="section-title">Buyer Instructions</h4>
                <p>No matter <strong>how much money</strong> you spend, you don't know where to buy <strong>quality products</strong>.<br>
                    Tired of searching and searching, with no other way.</p>
                <p>Buyers can explore a wide range of high-quality products from trusted farmers. Follow these steps to find and purchase products easily.</p>
                <p>For assistance with purchases and understanding product quality, visit our buyer help section.</p>
                <p>No matter <strong>how much money</strong> you spend, you don't know where to buy <strong>quality products</strong>.<br>
                    Tired of searching and searching, with no other way.</p>
                <p>Buyers can explore a wide range of high-quality products from trusted farmers. Follow these steps to find and purchase products easily.</p>
                <p>For assistance with purchases and understanding product quality, visit our buyer help section.</p>     <p>No matter <strong>how much money</strong> you spend, you don't know where to buy <strong>quality products</strong>.<br>
                    Tired of searching and searching, with no other way.</p>
                <p>Buyers can explore a wide range of high-quality products from trusted farmers. Follow these steps to find and purchase products easily.</p>
                <p>For assistance with purchases and understanding product quality, visit our buyer help section.</p>     <p>No matter <strong>how much money</strong> you spend, you don't know where to buy <strong>quality products</strong>.<br>
                    Tired of searching and searching, with no other way.</p>
                <p>Buyers can explore a wide range of high-quality products from trusted farmers. Follow these steps to find and purchase products easily.</p>
                <p>For assistance with purchases and understanding product quality, visit our buyer help section.</p>
            </div>
        </div>
    </div>
    @endsection

