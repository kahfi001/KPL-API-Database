@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Product</h1>
</div>

<div class="col-lg-8">
  <form action="/dashboard/product/{{ $product->id }}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name',$product->name) }}">
      @error('name')
          <div class="invalid-feedback">
          {{ $message }}
          </div>  
      @enderror
    </div>
    <div class="mb-3">
      <label for="photo" class="form-label  @error('photo') is-invalid @enderror">Upload photo</label>
      <img class="img-preview img-fluid mb-3 col-sm-5">
      <input class="form-control" type="file" id="photo" name="photo" onchange="photo()" value="{{ old('photo',$product->photo) }}">
      @error('photo')
          <div class="invalid-feedback">
          {{ $message }}
          </div>  
      @enderror
    </div>
    <div class="mb-3">
      <label for="price" class="form-label  @error('price') is-invalid @enderror">Price</label>
      <input class="form-control" type="number" id="price" name="price" value="{{ old('price',$product->price) }}" >
      @error('price')
          <div class="invalid-feedback">
          {{ $message }}
          </div>  
      @enderror
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" required value="{{ old('description',$product->description) }}">
      @error('description')
          <div class="invalid-feedback">
          {{ $message }}
          </div>  
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update Product</button>
  </form>
</div>
  
@endsection 