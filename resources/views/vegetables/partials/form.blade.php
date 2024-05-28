<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $vegetable->name) }}" required>
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="category_id" class="form-label">Category</label>
    <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
        <option value="">Select Category</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id', $vegetable->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
        @endforeach
    </select>
    @error('category_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="seller_id" class="form-label">Seller</label>
    <select name="seller_id" class="form-control @error('seller_id') is-invalid @enderror">
        <option value="">Select Seller</option>
        @foreach($sellers as $seller)
            <option value="{{ $seller->id }}" {{ old('seller_id', $vegetable->seller_id) == $seller->id ? 'selected' : '' }}>{{ $seller->name }}</option>
        @endforeach
    </select>
    @error('seller_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $vegetable->price) }}" required>
    @error('price')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="availability" class="form-label">Availability</label>
    <select name="availability" class="form-control @error('availability') is-invalid @enderror" required>
        <option value="In stock" {{ old('availability', $vegetable->availability) == 'In stock' ? 'selected' : '' }}>In stock</option>
        <option value="Out of stock" {{ old('availability', $vegetable->availability) == 'Out of stock' ? 'selected' : '' }}>Out of stock</option>
    </select>
    @error('availability')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" class="form-control @error('description') is-invalid @enderror" required>{{ old('description', $vegetable->description) }}</textarea>
    @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="origin_id" class="form-label">Origin</label>
    <select name="origin_id" class="form-control @error('origin_id') is-invalid @enderror">
        <option value="">Select Origin</option>
        @foreach($origins as $origin)
            <option value="{{ $origin->id }}" {{ old('origin_id', $vegetable->origin_id) == $origin->id ? 'selected' : '' }}>{{ $origin->name }}</option>
        @endforeach
    </select>
    @error('origin_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
    @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
