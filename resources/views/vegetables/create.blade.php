<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<div class="container">
    <h1>Add New Vegetable</h1>
    <form action="{{ route('vegetables.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('vegetables.partials.form', ['vegetable' => new \App\Models\Vegetable])
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
