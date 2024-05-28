<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<div class="container">
    <h1>Edit Vegetable</h1>
    <form action="{{ route('vegetables.update', $vegetable->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('vegetables.partials.form', ['vegetable' => $vegetable])
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
