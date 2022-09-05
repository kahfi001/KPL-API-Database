@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Welcome {{ auth()->user()->name }}</h1>
</div>
<div class="col-lg-8">
  <form action="dashboard/create" method="psot" enctype="multipart/form-data"> 
    <label for="store" class="form-label">Nama Store</label>
    <input type="text" class="form-control @error('store') is-invalid @enderror" id="store" name="store" required>
    @error('store')
        <div class="invalid-feedback">
        {{ $message }}
        </div>  
    @enderror
    <button class="btn btn-success mt-2" type="submit">Buat Toko</button>
  </form>
</div>
    
@endsection