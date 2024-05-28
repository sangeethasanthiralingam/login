@extends('layouts.layout')

@section('title', 'Edit Product')

@section('content')
<div class="container">
    <h1>Edit a Product</h1>
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
    <form method="post" action="{{ route('product.update', ['product' => $product]) }}">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ $product->name }}" />
        </div>
        <div class="form-group">
            <label for="qty">Qty</label>
            <input type="text" name="qty" class="form-control" id="qty" placeholder="Qty" value="{{ $product->qty }}" />
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Price" value="{{ $product->price }}" />
        </div>
        <div class="form-group">
            <label for="price">Category</label>
            <input type="text" name="category" class="form-control" id="category" placeholder="category" value="{{ $product->category }}" />
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" id="description" placeholder="Description" value="{{ $product->description }}" />
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('product.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
</div>
@endsection
