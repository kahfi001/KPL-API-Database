@extends('layouts.main',['title'=>  $user ])

@section('container')
  <div class="container">
      <x-card title="{{ $user }}">
          Hi nama saya adalah {{ $user }}
      </x-card>
  </div>

@endsection