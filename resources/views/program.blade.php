@extends('layouts.app',['title'=>'Program'])

@section('content')
  <div class="container">
      <div class="row flex-lg-row-reverse align-items-center">
        <div>
          <x-card title='Program'>
            <table id="myTable" class="table">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Photo</th>
                </thead>
                <tbody>
                @foreach ($product as $key => $product)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description}}</td>
                    <td>{{ $product->photo}}</td>
                </tr>
                @endforeach 
                </tbody>
            </table>
          </x-card>
        </div>
      </div>
  </div>

  <script>
  $(document).ready( function () {
    $('#myTable').DataTable();
  } );
  </script>
@endsection


