@extends('layouts.layout')

@section('title', 'Products')

@section('content')
<body>
    <div class="container">
        <h1>Products</h1>
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <form action="{{ route('products.search') }}" method="GET" class="form-inline">
                <div class="form-group">
                    <input type="text" name="search" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-primary ml-2">Search</button>
            </form>
            <div>
                <a href="{{ route('product.create') }}" class="btn btn-primary">Create a Product</a>
                <a href="{{ url('sellers') }}" class="btn btn-secondary ml-2">Back</a>
            </div>
        </div>
        <form action="{{ route('products.filter') }}" method="GET" class="form-inline mb-3">
    <div class="form-group mr-2">
        <select name="type" class="form-control">
            <option value="">All Types</option>
            <option value="leafy-greens">Leafy Greens</option>
            <option value="root-vegetables">Root Vegetables</option>
            <option value="fruits">Fruits</option>
            <!-- Add more options as needed -->
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Filter</button>
</form>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->qty }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->description }}</td>
                            <td>
                                <a href="{{ route('product.edit', ['product' => $product]) }}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form method="post" action="{{ route('product.destroy', ['product' => $product]) }}">
                                    @csrf 
                                    @method('delete')
                                    <input type="submit" value="Delete" class="btn btn-danger" />
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
@endsection
