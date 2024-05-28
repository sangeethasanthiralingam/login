<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<div class="container">
    <h1>Vegetables</h1>
    <a href="{{ route('vegetables.create') }}" class="btn btn-primary mb-3">Add New Vegetable</a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Seller</th>
                <th>Price</th>
                <th>Availability</th>
                <th>Description</th>
                <th>Origin</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vegetables as $vegetable)
                <tr>
                    <td>{{ $vegetable->name }}</td>
                    <td>{{ $vegetable->category->name ?? 'N/A' }}</td>
                    <td>{{ $vegetable->seller->name ?? 'N/A' }}</td>
                    <td>{{ $vegetable->price }}</td>
                    <td>{{ $vegetable->availability }}</td>
                    <td>{{ $vegetable->description }}</td>
                    <td>{{ $vegetable->origin->name ?? 'N/A' }}</td>
                    <td>
                        @if($vegetable->image)
                            <img src="{{ asset('storage/' . $vegetable->image) }}" alt="{{ $vegetable->name }}" width="50">
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('vegetables.show', $vegetable->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('vegetables.edit', $vegetable->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('vegetables.destroy', $vegetable->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
