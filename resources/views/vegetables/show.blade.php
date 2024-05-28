<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<div class="container">
    <h1>{{ $vegetable->name }}</h1>
    <p><strong>Category:</strong> {{ $vegetable->category->name ?? 'N/A' }}</p>
    <p><strong>Seller:</strong> {{ $vegetable->seller->name ?? 'N/A' }}</p>
    <p><strong>Price:</strong> {{ $vegetable->price }}</p>
    <p><strong>Availability:</strong> {{ $vegetable->availability }}</p>
    <p><strong>Description:</strong> {{ $vegetable->description }}</p>
    <p><strong>Origin:</strong> {{ $vegetable->origin->name ?? 'N/A' }}</p>
    @if($vegetable->image)
        <p><strong>Image:</strong><br>
        <img src="{{ asset('storage/' . $vegetable->image) }}" alt="{{ $vegetable->name }}" width="200"></p>
    @endif
    <a href="{{ route('vegetables.index') }}" class="btn btn-secondary">Back to List</a>
</div>
