@extends('dashboard.layouts.main')

@section('container')
@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div> 
@endif
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Welcome {{ auth()->user()->name }}</h1>
</div>
<div class="col-lg-8">
  <form method="POST" action="/dashboard/create"  enctype="multipart/form-data">
    @csrf 
    <label for="name" class="form-label">Nama Store</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required>
    @error('name')
        <div class="invalid-feedback">
        {{ $message }}
        </div>  
    @enderror
    <button class="btn btn-success mt-2" type="submit">Buat Toko</button>
  </form>
</div>
    
@endsection