@extends('layouts.layout')

@section('title', 'Create products')

@section('content')
<div class="container">
    <h1>Create a Product</h1>
    <div>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <form method="post" action="{{ route('product.store') }}">
        @csrf 
        @method('post')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Name" />
        </div>
        <div class="form-group">
            <label for="qty">Qty</label>
            <input type="text" name="qty" class="form-control" id="qty" placeholder="Qty" />
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Price" />
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" id="description" placeholder="Description" />
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Save a New Product</button>
            <a href="{{ route('product.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
</div>
@endsection
