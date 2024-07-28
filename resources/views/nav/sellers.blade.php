@extends('layouts.layout')

@section('title', 'Bring Your Products here')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <a href="{{ url('/') }}">
                <img src="Website/Veg World Logo.png" width="125px">
            </a>
            <a href="{{('cart')}}" class="float-right">
                <img src="Website/shopping cart.png" width="50px" height="50px"></a>
            <h1>Believe in your hard work<br>Get quality from the producer yourself</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <img src="Website/Seller.png" class="img-fluid">
            <div class="text-center">
                <a href="{{('/product')}}" class="btn btn-primary">Put Your Products Here</a>
                <a href="{{('about-us#seller-instructions')}}" class="btn btn-secondary">Tap here For more Details</a>
            </div>
        </div>
    </div>
</div>
@endsection