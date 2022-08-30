@extends('dashboard.layouts.main')

@section('container')
{{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Halo Kahfi</h1>
</div> --}}

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div> 
@endif
<h1 class="h2">Halo {{ auth()->user()->name }}</h1>
<table class="table table-striped table-sm">
  <a href="/dashboard/product/create" class="btn btn-primary mb-3">Buat Product</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Photo</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->photo }}</td>
        <td>
          {{-- <a href="/dashboard/product" class="btn btn-info"><span data-feather="eye"></span> Lihat</a> --}}
          {{-- <a href="/dashboard/faq/{{ $faq->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a> --}}
          <a href="/dashboard/product/{{ $product->id }}/edit" class="btn btn-warning "><span data-feather="edit"></span> Edit</a>
          <form action="/dashboard/product/{{ $product->id }}" method="post" class="d-inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" onclick="return confirm('Produk akan dihapus')"><span data-feather="x-circle"></span>Hapus</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>  
    
@endsection




    
